<?php include 'include/headers.php'; ?>
<?php include 'db.php'; ?>
<br>
<br>
<br>
<br>




<h1> ORDER ONLINE!</h1>
<div class="menu-list-container">
    <?php
    // Prepare and execute the SQL statement
    $stmt = $pdo->prepare('SELECT name, description, price, image_url FROM menu_items WHERE category = ?');
    $stmt->execute(['Appetizers']);

    // Fetch and display each row
    while ($row = $stmt->fetch()) {
        echo '<div class="menu-list">';
        echo '<img src="' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['name']) . '">';
        echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
        echo '<p>' . htmlspecialchars($row['description']) . '</p>';
        echo '<p>Price: $' . htmlspecialchars($row['price']) . '</p>';
        echo '</div>';
    }
    ?>
</div>








<?php include 'include/footer.php' ?>