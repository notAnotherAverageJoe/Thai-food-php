<?php include 'include/headers.php'; ?>
<?php include 'db.php'; ?>
<br>
<br>
<br>
<br>


<div class="menu-list-container">
    <?php

    $stmt = $pdo->query('SELECT id, name, description, price, image_url, category FROM menu_items ORDER BY category');

    $currentCategory = null;
    while ($row = $stmt->fetch()) {
        if ($row['category'] !== $currentCategory) {
            if ($currentCategory !== null) {
                echo '</div>'; // Close previous category div
            }
            $currentCategory = $row['category'];
            echo '<h2>' . htmlspecialchars($currentCategory) . '</h2>';
            echo '<div class="menu-category">';
        }
        echo '<div class="menu-list">';
        echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
        echo '<img src="' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['name']) . '">';
        echo '<p>' . htmlspecialchars($row['description']) . '</p>';
        echo '<p>Price: $' . htmlspecialchars($row['price']) . '</p>';
        echo '<form method="post" action="add_to_cart.php">';
        echo '<input type="hidden" name="item_id" value="' . htmlspecialchars($row['id']) . '">';
        // echo '<button type="submit">Add to Cart</button>';
        echo '</form>';
        echo '</div>';
    }
    if ($currentCategory !== null) {
        echo '</div>'; // Close last category div
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-RC7E4xQ7rV2d0Y+DhUDxmpGqPmW9wzBQx8XlB6u5JcPdhDQBKQWJhJw8S1QfHL4r" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.add-to-cart').on('click', function() {
            let itemId = $(this).data('item-id');
            $.ajax({
                url: 'cart.php',
                method: 'POST',
                data: {
                    itemId: itemId
                },
                success: function(response) {
                    // Handle success response
                    console.log('Item added to cart:', response);
                },
                error: function(xhr, status, error) {
                    console.error('Error adding item to cart:', error);
                }
            });
        });
    });
</script>

<?php include 'include/footer.php'; ?>