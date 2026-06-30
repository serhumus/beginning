# 📡 Ultimate Multi-API Crypto Monitor

A lightweight, zero-dependency, single-file HTML5 dashboard designed to track real-time cryptocurrency price changes across multiple major exchange APIs. It features customized percentage-threshold monitoring and integrates the **Web Speech API** to provide configurable text-to-speech voice notifications whenever sudden price swings occur.

---

## ✨ Features

* **Multi-Exchange API Support:** Out-of-the-box configuration structures for **7 major crypto data providers**:
    * Coinbase, CoinGecko, Binance, Kraken, KuCoin, Coinpaprika, and Bitfinex.
* **Dynamic Smart Placeholders:** Auto-updates user input hints with exact ID formats required per specific exchange API.
* **Vocal Text-to-Speech Alerts:** Built-in TTS announcements that speak price actions out loud (e.g., *"Bitcoin surpassed"* or *"Ethereum dropped"*).
* **Full Speech Customization:** Modify voice profiles, playback speeds, and pitches natively in your browser.
* **Configurable Parameters:** Tailor tracking intervals (seconds) and precise sensitivity thresholds down to two decimal percentage points ($0.01\%$).
* **Sleek Dark Mode Design:** Clean, interactive glassmorphic UI built using modern CSS variables and flex-grids.

---

## 🚀 Quick Start

Since this dashboard is completely client-side, **no installation or local build servers are required**.

1.  Clone this repository or download the source `index.html` file.
2.  Open `index.html` in any modern web browser (Chrome, Brave, Firefox, Edge, Safari).
3.  Select your desired **API Data Source**.
4.  Input the exact **Coin ID / Symbol** (the placeholder updates to show you the expected format for your chosen API).
5.  Type a friendly nickname in **Name to Speak** for the audio broadcast alerts.
6.  Click **Start Monitoring**.

---

## ⚙️ How It Works Under the Hood

### API Format Mapping
The underlying engine utilizes an `apiConfigs` directory object that handles dynamic query building and response parsing uniquely across services. For example:

```javascript
coinbase: {
    url: (id) => `https://api.coinbase.com/v2/prices/${id.toUpperCase()}/spot`,
    parse: (data) => parseFloat(data.data.amount)
}
