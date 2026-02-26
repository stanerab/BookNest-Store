<?php
// test_connection.php - DELETE AFTER TESTING!

$host = 'sql100.infinityfree.com';
$user = 'if0_40168601';
$pass = 'Stanleyson00';
$db   = 'if0_40168601_ci4tutorial';

echo "<h1>Database Connection Test</h1>";

// Test connection
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo "<p style='color:red'>❌ Connection failed: " . $conn->connect_error . "</p>";
} else {
    echo "<p style='color:green'>✅ Connected successfully!</p>";
    
    // Show tables
    $result = $conn->query("SHOW TABLES");
    if ($result->num_rows > 0) {
        echo "<h3>Tables in database:</h3>";
        echo "<ul>";
        while ($row = $result->fetch_row()) {
            echo "<li>" . $row[0] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p style='color:orange'>⚠️ No tables found! You need to import your database.</p>";
    }
    
    $conn->close();
}