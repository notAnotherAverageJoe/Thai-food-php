<?php include 'include/headers.php'  ?>

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
        <p>We pride ourselves on using only the freshest,
            highest-quality vegetables in our dishes.
            Sourced daily from local markets, our vegetables are crisp,
            vibrant, and full of flavor. From crunchy bell peppers to tender baby
            corn, every ingredient is carefully selected to ensure a delightful and nutritious
            dining experience. Taste the difference in every bite!</p>

    </div>
    <div class="menu-item">
        <img src="/static/green-curry.jpg" alt="Green Curry">
        <h3>Healthy Meats</h3>
        <p>Our meats are carefully selected to ensure they are lean,
            tender, and full of flavor. We work with trusted suppliers to provide you with the highest quality
            chicken, beef, pork, and seafood. Each cut is chosen to complement our rich and aromatic Thai spices,
            creating dishes that are both satisfying and nutritious.
            Experience the perfect balance of protein and taste in every bite!</p>

    </div>

</section>

<?php include 'include/footer.php' ?>
</body>

</html>