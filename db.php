<?php
require __DIR__ . '/vendor/autoload.php'; // Load Composer's autoloader

use Dotenv\Dotenv;

// Specify the path to your .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Database connection parameters from .env
$dsn = "pgsql:host=" . $_ENV['DB_HOST'] . ";port=" . $_ENV['DB_PORT'] . ";dbname=" . $_ENV['DB_DATABASE'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];

try {
    // Establishing connection
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Example query
    $stmt = $pdo->query("SELECT name, description, price, image_url, category FROM menu_items");

    // Fetch and display results
    // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     echo "<div class='menu-item'>";
    //     echo "<img src='" . $row["image_url"] . "' alt='" . $row["name"] . "'>";
    //     echo "<h3>" . $row["name"] . "</h3>";
    //     echo "<p>" . $row["description"] . "</p>";
    //     echo "<p>Price: $" . $row["price"] . "</p>";
    //     echo "</div>";
    // }
} catch (PDOException $e) {
    echo "An error occurred: " . $e->getMessage();
}