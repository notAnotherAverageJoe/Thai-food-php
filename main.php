<?php include 'include/headers.php'  ?>

<main>
    <section id="home" class="hero">

        <h1 id="front_page"> <?= $restaurant_name ?></h1>
        <p>Experience the authentic taste of Thailand.</p>
        <a href="/menu.php" class="btn">View Menu</a>
    </section>
    <section id="ingredients">
        <h2>Our Ingredients</h2>
        <div class="menu-item">
            <img src="/static/satay-chicken.jpg" alt="Pad Thai">
            <h3>Fresh Vegetables</h3>
            <p>We use em fresh</p>
        </div>
        <div class="menu-item">
            <img src="/static/green-curry.jpg" alt="Green Curry">
            <h3>Healthy meats</h3>
            <p>yum meats</p>
        </div>
        <!-- Add more  later -->
    </section>

</main>
<?php include 'include/footer.php' ?>
</body>

</html>