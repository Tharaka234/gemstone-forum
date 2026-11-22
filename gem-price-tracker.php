<section class="price-tracker">
    <h2>Live Gemstone Prices</h2>
    <div class="tracker-controls">
    <select id="gem-selector">
    <option value="sapphire">Blue Sapphire (Sri Lanka, 1ct)</option>
    <option value="catseye">Cat’s Eye (Sri Lanka, 1ct)</option>
    <option value="ruby">Ruby (Sri Lanka, 1ct)</option>
    <option value="padparadscha">Padparadscha Sapphire (Sri Lanka, 1ct)</option>
    </select>
       <button onclick="fetchGemPrice()" class="btn">Check Price</button>
    </div>
    <div id="price-result" class="price-display">
        <!-- Results will appear here -->
    </div>

    <script>
    // Simulated API response
    const gemPrices = {
    sapphire: { price: 1850000, trend: '↑', change: 4.8, last_updated: '2025-05-29' },
    catseye: { price: 1300000, trend: '→', change: 0.0, last_updated: '2025-05-29' },
    ruby: { price: 1550000, trend: '↓', change: 1.9, last_updated: '2025-05-29' },
    padparadscha: { price: 2750000, trend: '↑', change: 2.7, last_updated: '2025-05-29' }
};
function fetchGemPrice() {
    const gem = document.getElementById('gem-selector').value;
    const data = gemPrices[gem];

    const resultDiv = document.getElementById('price-result');
    resultDiv.innerHTML = `
        <div class="price-card ${data.trend === '↑' ? 'up' : data.trend === '↓' ? 'down' : 'neutral'}">
            <h3>${gem.charAt(0).toUpperCase() + gem.slice(1)}</h3>
            <div class="price-main">LKR ${data.price.toLocaleString()}</div>
            <div class="price-meta">
                <span class="trend">${data.trend} ${data.change}%</span>
                <span class="updated">Updated: ${data.last_updated}</span>
            </div>
        </div>
    `;
}
    
    // Load initial price
    window.onload = fetchGemPrice;
    </script>
</section>