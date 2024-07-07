<?php include 'include/headers.php' ?>

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

<?php include 'include/footer.php' ?>