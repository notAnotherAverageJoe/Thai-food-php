<?php include 'include/headers.php'  ?>

<main>
    <section id="home" class="hero">
        <h1>Welcome to Thai Delight</h1>
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
    <section id="about">
        <h2>About Us</h2>
        <p style="text-align: center;">At Thai Delight, we are dedicated to providing an exceptional dining experience with authentic Thai cuisine.<br> Our chefs use the freshest ingredients to create dishes that will transport your taste buds to Thailand.</p>
    </section>
    <section id="contact">
        <h2>Contact Us</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>
</main>
<?php include 'include/footer.php' ?>
</body>

</html>