<?php include 'include/headers.php'  ?>

<main>
    <section id="home" class="hero">
        <h1 id="front_page">Welcome <?= $restaurant_name ?></h1>
        <p>Experience the authentic taste of Thailand.</p>
        <a href="/menu.php" class="btn">View Menu</a>
    </section>
    <section id="specials">
        <h2>Our Specials</h2>
        <div class="menu-item">
            <img src="/static/satay-chicken.jpg" alt="Pad Thai">
            <h3>Pad Thai</h3>
            <p>Satay Chicken is a popular Thai appetizer featuring skewered,
                marinated chicken grilled to perfection and served
                with a flavorful peanut dipping sauce.</p>
        </div>
        <div class="menu-item">
            <img src="/static/green-curry.jpg" alt="Green Curry">
            <h3>Green Curry</h3>
            <p>Spicy green curry with coconut milk, bamboo shoots, and your choice of meat.</p>
        </div>
        <!-- Add more menu items later -->
    </section>

</main>
<?php include 'include/footer.php' ?>
</body>

</html>