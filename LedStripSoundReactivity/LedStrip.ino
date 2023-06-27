/*
The following code is the logic of a controller led strip with a button to pattern of brightness including 
sound reactivity with the suitable sensors, to view more of my work enter in my page: tecnosmart.com.br
 */

//variables values to pushbutton, potentiometers and microfone sensor
int buttonState = 0;
int pot1 = 0;
int pot2 = 0;
int pot3 = 0;
int mic = 0;

void setup(){
	pinMode(A0, INPUT);
	pinMode(5, OUTPUT);
	pinMode(6, OUTPUT);
	pinMode(9, OUTPUT);
	pinMode(LED_BUILTIN, OUTPUT);
	Serial.begin(9600);
	pinMode(A1, INPUT);
	pinMode(A2, INPUT);
	pinMode(A3, INPUT);
	pinMode(A3, INPUT);
}
void loop(){
  // read the input pin of pushbutton
  buttonState = digitalRead(A0);
  // read the input pin of potentiometers
  pot1 = analogRead(A1);
  pot2 = analogRead(A2);
  pot3 = analogRead(A3);
  // check if pushbutton is pressed.  if it is, the
  // buttonState is 1 (digitalRead)
  if (buttonState == HIGH) {
    // turn LED on
    analogWrite(5, 255);
    analogWrite(6, 0);
    analogWrite(9, 0);
    digitalWrite(LED_BUILTIN, HIGH);
    // print out th`e state of the button
  	Serial.println(buttonState);
  } else {
    // turn LED off
    digitalWrite(LED_BUILTIN, LOW);
  }
  delay(10); // Delay a little bit to improve simulation performance
}
