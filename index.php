<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wise Funds NAV History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000;
            color: #fff;
        }
        .header {
            background-color: #000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            font-family: Calibri, sans-serif;
            font-style: italic;
            font-size: 32px;
        }
        .container {
            padding: 20px;
        }
        .form-container, .history-container {
            background-color: #333;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .form-container select, .form-container input, .history-container select, .history-container input {
            padding: 10px;
            margin: 5px 0;
            width: calc(50% - 12px);
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #555;
            color: #fff;
        }
        .form-row, .form-row-right {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .form-row label, .form-row-right label {
            flex: 1;
            margin-right: 10px;
            color: #ccc;
        }
        .form-row select, .form-row input, .form-row-right select, .form-row-right input {
            flex: 2;
        }
        .form-row-right select {
            margin-left: 10px;
        }
        .footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        a {
            color: #0066cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .csv-button {
            background-color: #fff;
            color: #333;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 50%;
            margin-left: 10px;
        }
        .csv-button:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Wise Funds NAV History</h1>
    </div>
    <div class="container">
        <div class="form-container">
            <h2>Nav History <button class="csv-button">CSV</button></h2>
            <form method="post" action="process_form.php">
                <div class="form-row">
                    <label for="mutual-fund">Select Mutual Fund</label>
                    <select id="mutual-fund" name="mutual-fund">
                        <option value="">--Select Mutual Fund--</option>
                        <?php
                        // Assuming you have a function getMutualFunds() that returns an array of mutual funds
                        // $mutualFunds = getMutualFunds();
                        $mutualFunds = ['Fund A', 'Fund B', 'Fund C']; // Example data
                        foreach ($mutualFunds as $fund) {
                            echo "<option value=\"$fund\">$fund</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-row">
                    <label for="type">Select Type</label>
                    <select id="type" name="type">
                        <option value="">--Select Type--</option>
                        <?php
                        // Assuming you have a function getTypes() that returns an array of types
                        // $types = getTypes();
                        $types = ['Type 1', 'Type 2', 'Type 3']; // Example data
                        foreach ($types as $type) {
                            echo "<option value=\"$type\">$type</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-row-right">
                    <label for="from-date">From Date</label>
                    <input type="date" id="from-date" name="from-date" value="<?php echo date('Y-m-d'); ?>">
                    <label for="to-date">To Date</label>
                    <input type="date" id="to-date" name="to-date">
                </div>
            </form>
        </div>
        <div class="history-container">
            <h2>Recorded History</h2>
            <?php
            // Placeholder for recorded history content
            // Assuming you have a function getHistory() that returns the recorded history
            // $history = getHistory();
            $history = []; // Example data
            if (empty($history)) {
                echo "<p>No history recorded yet.</p>";
            } else {
                // Display history
                foreach ($history as $record) {
                    echo "<p>$record</p>";
                }
            }
            ?>
        </div>
    </div>
    <div class="footer">
        <p>&copy; <a href="https://www.wisefunds.in/" target="_blank">2024 WiseFund</a>. All rights reserved.</p>
    </div>
</body>
</html>
