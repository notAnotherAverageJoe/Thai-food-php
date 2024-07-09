<?php include 'include/headers.php'; ?>
<?php include 'db.php'; ?>
<br>
<br>
<br>
<br>
<div class="menu-list-container">
    <?php

    $stmt = $pdo->query('SELECT name, description, price, image_url, category FROM menu_items ORDER BY category');

    $currentCategory = null;
    while ($row = $stmt->fetch()) {
        // Display category header if it's a new category
        if ($row['category'] !== $currentCategory) {
            if ($currentCategory !== null) {
                echo '</div>'; // Close previous category div
            }
            $currentCategory = $row['category'];
            echo '<h2>' . htmlspecialchars($currentCategory) . '</h2>';
            echo '<div class="menu-category">';
        }
        echo '<div class="menu-list">';
        echo '<img src="' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['name']) . '">';
        echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
        echo '<p>' . htmlspecialchars($row['description']) . '</p>';
        echo '<p>Price: $' . htmlspecialchars($row['price']) . '</p>';
        echo '</div>';
    }
    if ($currentCategory !== null) {
        echo '</div>';
    }
    ?>
</div>

<?php include 'include/footer.php'; ?>