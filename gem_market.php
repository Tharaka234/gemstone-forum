<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gem Market Trends Forum 2025</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary: #17a2b8;
            --secondary: #d4af37;
            --background-light: #f8f9fa;
            --background-dark: #121212;
            --text-light: #212529;
            --text-dark: #f1f1f1;
            --card-light: #ffffff;
            --card-dark: #1e1e1e;
            --navbar-height: 60px;
        }

        [data-theme="light"] {
            --bg: var(--background-light);
            --text: var(--text-light);
            --card: var(--card-light);
            --navbar-bg: #ffffff;
            --navbar-text: #212529;
            --navbar-border: #e0e0e0;
        }

        [data-theme="dark"] {
            --bg: var(--background-dark);
            --text: var(--text-dark);
            --card: var(--card-dark);
            --navbar-bg: #1a1a1a;
            --navbar-text: #f1f1f1;
            --navbar-border: #333333;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: var(--bg);
            color: var(--text);
            margin: 0;
            padding: 0;
            padding-top: var(--navbar-height); /* Space for fixed navbar */
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        header {
            text-align: center;
            background: var(--primary);
            color: white;
            padding: 3rem 2rem 2rem;
            margin-top: -30px; /* Compensate for body padding */
        }
        
        section {
            background: var(--card);
            border-radius: 8px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h2 {
            color: var(--primary);
            margin-bottom: 1rem;
            border-bottom: 3px solid var(--secondary);
            padding-bottom: 0.5rem;
        }

        .btn, button {
            background: var(--primary);
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #125d6d;
        }

        .poll-result-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            transition: all 0.3s ease-in-out;
        }

        .theme-toggle {
            position: fixed;
            top: calc(var(--navbar-height) + 10px);
            right: 1rem;
            z-index: 100;
        }

        footer {
            background: var(--primary);
            text-align: center;
            color: white;
            padding: 1rem;
            margin-top: 7rem;
        }

        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar {
                padding: 0 12px;
            }
            
            .navbar-links {
                gap: 10px;
                font-size: 0.9rem;
            }
            
            .theme-toggle {
                top: calc(var(--navbar-height) + 5px);
                right: 0.5rem;
            }
        }
    </style>
</head>
<body>
   
   
    <header>
        <h1>Gem Market Trends</h1>
        <p>Your source for gemstone pricing, news, and 2025 market insights</p>
    </header>

    <div class="theme-toggle">
        <button onclick="toggleTheme()">🌓 Toggle Theme</button>
    </div>

    <main class="container">
        <?php include 'gem-price-tracker.php'; ?>

        <section class="market-poll">
            <h2>Market Prediction Poll</h2>
            <form method="POST" action="vote.php">
                <div class="poll-options">
                    <p><strong>Select a Cut Type:</strong></p>
                    <label><input type="radio" name="cut" value="oval" required> Oval</label>
                    <label><input type="radio" name="cut" value="heart"> Heart</label>
                    <label><input type="radio" name="cut" value="pear"> Pear</label>
                </div>
                <button type="submit" class="btn">Vote</button>
            </form>

            <div class="poll-results">
                <h3>Current Cut Type Results</h3>
                <?php
                if (isset($db) && $db instanceof mysqli) {
                    $result = $db->query("SELECT * FROM cut_poll ORDER BY votes DESC");
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $cut = htmlspecialchars($row['cut_type']);
                            $votes = (int)$row['votes'];
                            echo "<div class='poll-result-item'>";
                            echo "<span>{$cut} Cut</span>";
                            echo "<span>{$votes} votes</span>";
                            echo "</div>";
                        }
                    } else {
                        echo "<p>No cut type poll results yet.</p>";
                    }
                } else {
                    echo "<p>Database connection error.</p>";
                }
                ?>
            </div>
            <hr>
        </section>

        <section class="price-history">
            <div class="chart-wrapper">
                <?php include 'gem-chart.php'; ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Gem Market Trends</p>
    </footer>

    <script>
        function toggleTheme() {
            const html = document.documentElement;
            const current = html.getAttribute('data-theme');
            const newTheme = current === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        }

        function filterNews(input) {
            const keyword = input.value.toLowerCase();
            document.querySelectorAll('.news-item').forEach(item => {
                item.style.display = item.textContent.toLowerCase().includes(keyword) ? '' : 'none';
            });
        }

        // Check for saved theme preference
        document.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', savedTheme);
        });
    </script>
</body>
</html>