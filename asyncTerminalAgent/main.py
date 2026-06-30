import os
import asyncio
import sys
import json
from openai import AsyncOpenAI

# 1. Configuration - Increased network timeout for long-running LLM calls
client = AsyncOpenAI(
    base_url="https://openrouter.ai/api/v1",
    api_key=os.environ.get("OPENROUTER_API_KEY"),
    timeout=300.0  # 5-minute network timeout
)

model_id = "google/gemini-2.5-flash-lite"

def truncate_output(output_list, max_lines=91):
    """Keeps the important parts of the log (beginning and end)."""
    if len(output_list) <= max_lines:
        return "\n".join(output_list)
    
    head = output_list[:35]  # First 35 lines (setup/start)
    tail = output_list[-35:] # Last 35 lines (errors/results)
    
    return "\n".join(head + ["\n[... MIDDLE LOGS TRUNCATED TO SAVE CONTEXT ...]\n"] + tail)

async def execute_terminal_command(command: str):
    """Executes command with real-time feedback and smart truncation."""
    print(f"\n>>> AGENT EXECUTING: {command}")
    full_output = []
    
    try:
        # 2. Background Processing: Start the process
        process = await asyncio.create_subprocess_shell(
            command,
            stdout=asyncio.subprocess.PIPE,
            stderr=asyncio.subprocess.STDOUT
        )

        # 3. Stream & Monitor
        while True:
            try:
                # Wait for a line, but don't wait forever (internal heartbeat)
                line_bytes = await asyncio.wait_for(process.stdout.readline(), timeout=1.0)
                if not line_bytes:
                    break
                
                line = line_bytes.decode().strip()
                print(f"  [Term]: {line}")
                full_output.append(line)
            except asyncio.TimeoutError:
                # This keeps the loop alive even if the command is silent but running
                continue
            
        await process.wait()
        
        # 4. Output Truncation before returning to LLM
        return truncate_output(full_output)
    
    except Exception as e:
        return f"System Failure during execution: {str(e)}"

async def run_interactive_agent():
    # 5. Strategic Prompting
    messages = [
        {
            "role": "system", 
            "content": (
                "You are a terminal assistant running on docker in super user (su). "
                "For long tasks (like npm install), be patient. "
                "Logs are truncated to save your context; focus on the START and the END of the output "
                "to diagnose issues. If a command fails, analyze the error and try a fix."
                "Project Title: LowLatencyModularVoiceAgent; ; Core Architecture:; Develop a terminal-based Python agent simulating a full-duplex voice call. Use a strictly modular approach, placing each component in its own script to allow for independent improvements. Provide detailed comments within each script. The system must use openWakeWord for local trigger detection, which initiates an asynchronous processing pipeline.; ; Data Pipeline:; ; STT: Stream audio to the OpenRouter API using Whisper Large v3 Turbo.; ; LLM: Process transcriptions using the google/gemini-2.5-flash-lite model via OpenRouter.; ; TTS: Stream LLM responses and split them into Minimum Viable Sentences (MVS). Dispatch these chunks to a containerized openai-edge-tts service (travisvn/openai-edge-tts).; ; Local TTS Integration:; Implement the TTS function using httpx. The service is running locally. Use the following structure for the request:; ; Endpoint: POST http://localhost:5050/v1/audio/speech; ; Payload: {\"input\": <chunk>, \"voice\": \"echo\", \"response_format\": \"mp3\", \"speed\": 1.0}; ; Headers: {\"Content-Type\": \"application/json\"},{\"Authorization: Bearer your_api_key_here\\\"}; ; Advanced Features:; ; Barge-in & AEC: Implement real-time interruption. Use webrtc-audio-processing for Acoustic Echo Cancellation to subtract the AI's playback from the microphone input.; ; Concurrency: Use asyncio to manage four concurrent tasks:; ; listen_task: AEC processing and WakeWord monitoring.; ; stt_task: Streaming audio to Whisper upon trigger.; ; llm_task: Generating sentence chunks from the Gemini model.; ; tts_task: Sending MVS chunks to the local TTS container.; ; UI: Create a live terminal display showing real-time STT and TTS text.; ; Memory: Implement a Rolling Window strategy for conversation history. Prune history based on a tokenizer-based token limit (using tiktoken) rather than message count.; ; Assumptions:; ; Hardware: Microphone and Speakers are available via PyAudio.; ; Environment: google.api_core, OpenAi, Silero-vad, PyAudio, webrtc-audio-processing, openWakeWord, tiktoken, rich, numpy and httpx are already installed."
                "The project will be created from scratch but don't forget that: google.api_core, OpenAi, Silero-vad, PyAudio, webrtc-audio-processing, openWakeWord, tiktoken, rich, numpy and httpx are already installed."
                "When creating a file, do not just use 'touch'. Use 'printf' or 'cat' to write the full initial boilerplate code immediately so you don't waste time."
            )
        }
    ]
    
    tools = [{
        "type": "function",
        "function": {
            "name": "execute_terminal_command",
            "description": "Executes terminal commands. Handles long-running tasks and large logs.",
            "parameters": {
                "type": "object",
                "properties": {
                    "command": {"type": "string"}
                },
                "required": ["command"]
            }
        }
    }]

    print("--- 🤖 Pro-Agent (Async/Optimized) Online ---")

    while True:
        loop = asyncio.get_event_loop()
        user_input = await loop.run_in_executor(None, input, "\nUser: ")
        
        if user_input.lower() in ['exit', 'quit']: break
        messages.append({"role": "user", "content": user_input})

        while True:
            try:
                response = await client.chat.completions.create(
                    model=model_id,
                    messages=messages,
                    tools=tools,
                    tool_choice="auto"
                )
                
                response_message = response.choices[0].message
                tool_calls = response_message.tool_calls

                # 1. Store the assistant's message (even if content is None)
                messages.append(response_message)

                if tool_calls:
                    for tool_call in tool_calls:
                        args = json.loads(tool_call.function.arguments)
                        result = await execute_terminal_command(args['command'])
                        
                        # 2. Add the tool result back to history
                        messages.append({
                            "role": "tool",
                            "tool_call_id": tool_call.id,
                            "name": "execute_terminal_command",
                            "content": result
                        })
                    
                    # 3. CRITICAL: Continue the loop so the LLM can 
                    # see the "success" and decide the next step.
                    continue 

                else:
                    # 4. Only print if there is actual text to show
                    if response_message.content:
                        print(f"\n🤖 Agent: {response_message.content}\n")
                    else:
                        # Fallback if the model is being too quiet
                        print(f"\n🤖 Agent: [Command Completed Successfully]\n")
                    break

            except Exception as e:
                print(f"❌ Error: {e}")
                break
if __name__ == "__main__":
    asyncio.run(run_interactive_agent())
