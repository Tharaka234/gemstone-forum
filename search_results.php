<!-- Gem Search Box -->
<div class="search-container">
  <h2>🔎 Find Your Gem</h2>
  <form id="searchForm" onsubmit="return redirectSearch();">
    <input type="text" id="searchInput" name="q" placeholder="e.g., Blue Sapphire, Ruby..." required>
    <button type="submit">Search</button>
  </form>
</div>

<style>
  .search-container {
    max-width: 600px;
    margin: 60px auto;
    padding: 30px;
    background: #f0f8ff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    text-align: center;
    font-family: 'Segoe UI', sans-serif;
  }

  .search-container h2 {
    margin-bottom: 20px;
    color: #003366;
    font-size: 24px;
  }

  #searchForm {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  #searchInput {
    padding: 12px;
    font-size: 16px;
    border: 1px solid #b3cde0;
    border-radius: 8px;
    width: 100%;
  }

  #searchForm button {
    padding: 12px;
    font-size: 16px;
    color: white;
    background-color: #0059b3;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  #searchForm button:hover {
    background-color: #003d80;
  }
</style>

<script>
  function redirectSearch() {
    const query = document.getElementById("searchInput").value.trim().toLowerCase();

    // Route based on input
    switch (query) {
      case "blue sapphire":
        window.location.href = "blue_sapphire.php?q=" + encodeURIComponent(query); break;
      case "green sapphire":
        window.location.href = "green_sapphire.php?q=" + encodeURIComponent(query); break;
      case "white sapphire":
        window.location.href = "white_sapphire.php?q=" + encodeURIComponent(query); break;
      case "pink sapphire":
        window.location.href = "pink_sapphire.php?q=" + encodeURIComponent(query); break;
      case "orange sapphire":
        window.location.href = "orange_sapphire.php?q=" + encodeURIComponent(query); break;
      case "yellow sapphire":
        window.location.href = "yellow_sapphire.php?q=" + encodeURIComponent(query); break;
      case "purple sapphire":
        window.location.href = "purple_sapphire.php?q=" + encodeURIComponent(query); break;
      case "pearl":
        window.location.href = "pearl.php?q=" + encodeURIComponent(query); break;
      case "ruby":
        window.location.href = "ruby.php?q=" + encodeURIComponent(query); break;
      default:
        window.location.href = "search.php?q=" + encodeURIComponent(query);
    }

    return false; // Prevent normal form submission
  }
</script>
