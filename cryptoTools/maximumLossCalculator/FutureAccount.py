import streamlit as st
import ccxt
import pandas as pd

# Set up the webpage title and layout
st.set_page_config(page_title="Binance Futures Risk Analyzer", layout="centered")
st.title("📊 Binance Futures Max Loss Analyzer")
st.write("Enter your API credentials below to calculate the total maximum possible loss for all your currently active open positions.")

# 1. User Input Fields for API Credentials
with st.form("api_form"):
    api_key = st.text_input("Binance API Key", type="password")
    api_secret = st.text_input("Binance API Secret", type="password")
    submit_button = st.form_submit_button("Process Futures Portfolio")

if submit_button:
    if not api_key or not api_secret:
        st.error("Please provide both your API Key and API Secret.")
    else:
        with st.spinner("Authenticating and fetching futures positions..."):
            try:
                # 2. Authenticate with Binance explicitly targeting the Futures market
                exchange = ccxt.binance({
                    'apiKey': api_key,
                    'secret': api_secret,
                    'enableRateLimit': True,
                    'options': {
                        'defaultType': 'future', # <-- Directs CCXT to use the USDS-M Futures API
                    }
                })

                # Fetch all account positions
                all_positions = exchange.fetch_positions()
                
                # Filter positions: Only take open positions (where contract size > 0)
                portfolio = []
                for pos in all_positions:
                    qty = float(pos.get('contracts', 0.0))
                    if qty > 0: # Active open position
                        portfolio.append(pos)

                if not portfolio:
                    st.warning("No active open futures positions found in this account.")
                else:
                    processed_portfolio = []
                    total_max_loss = 0.0

                    for pos in portfolio:
                        symbol = pos.get('symbol')          # e.g., "BTC/USDT:USDT"
                        qty = float(pos.get('contracts', 0.0))
                        entry_price = float(pos.get('entryPrice', 0.0))
                        side = pos.get('side')              # 'long' or 'short'
                        
                        # 3. Calculate Maximum Possible Loss (Qty * Entry Price)
                        # Note: For Short positions, max loss is theoretically infinite if a token spikes, 
                        # but this represents assets dropping to $0 (the worst-case for Longs / Margin collateral risk).
                        max_loss = qty * entry_price
                        total_max_loss += max_loss

                        processed_portfolio.append({
                            "Position": symbol,
                            "Side": side.upper(),
                            "Quantity": f"{qty:.4f}",
                            "Entry Price (USDT)": f"${entry_price:.4f}",
                            "Max Loss if Zero (USDT)": f"${max_loss:.2f}"
                        })

                    # Convert to DataFrame for presentation
                    df = pd.DataFrame(processed_portfolio)

                    # --- Display Results ---
                    st.success("Futures data successfully retrieved!")
                    
                    # 4. Sum up and display 'total sum of loss possible'
                    st.metric(
                        label="🚨 Total Position Notional Value (Max Loss Potential if Assets Drop to 0)", 
                        value=f"${total_max_loss:,.2f}"
                    )
                    
                    st.subheader("Active Futures Breakdown")
                    st.dataframe(df, use_container_width=True)

            except ccxt.AuthenticationError:
                st.error("Authentication failed. Please verify your Binance API Key and Secret (ensure Futures permissions are enabled on the key).")
            except Exception as e:
                st.error(f"An error occurred: {str(e)}")
