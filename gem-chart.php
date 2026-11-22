<?php
include 'config.php';

// Fetch cut type poll data
$cutLabels = [];
$cutVotes = [];

if (isset($db) && $db instanceof mysqli) {
    $result = $db->query("SELECT cut_type, votes FROM cut_poll ORDER BY votes DESC");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $cutLabels[] = htmlspecialchars($row['cut_type']);
            $cutVotes[] = (int)$row['votes'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>Gem Cut Type Poll Chart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background: var(--bg, #f8f9fa);
            color: var(--text, #212529);
            font-family: 'Segoe UI', sans-serif;
            padding: 2rem;
        }
        h2 {
            text-align: center;
            color: #17a2b8;
        }
        .chart-container {
            max-width: 600px;
            margin: 2rem auto;
            background: #fff;
            padding: 1rem;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<h2>Current Popularity of Gem Cut Types</h2>

<div class="chart-container">
    <canvas id="cutChart" width="400" height="400"></canvas>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const cutCtx = document.getElementById("cutChart").getContext("2d");

    const cutChart = new Chart(cutCtx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($cutLabels); ?>,
            datasets: [{
                label: "Cut Type Votes",
                data: <?php echo json_encode($cutVotes); ?>,
                backgroundColor: [
                    "#FF6384", "#36A2EB", "#FFCE56", "#4BC0C0", "#9966FF", "#FF9F40"
                ],
                borderColor: "#fff",
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: window.matchMedia('(prefers-color-scheme: dark)').matches ? "#ccc" : "#333"
                    }
                },
                title: {
                    display: true,
                    text: "Current Gem Cut Popularity",
                    color: window.matchMedia('(prefers-color-scheme: dark)').matches ? "#fff" : "#333",
                    font: {
                        size: 18
                    }
                }
            }
        }
    });
});
</script>

</body>
</html>
