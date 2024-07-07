<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $restaurant_name ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/app.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo"><?= $restaurant_name ?></div>
            <ul>
                <li><a href="/main.php">Home</a></li>
                <li><a href="#specials">Our Specials</a></li>
                <li><a href="/menu.php">Menu</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Your page content goes here -->

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+al9/jAjPr9I5whC/ffiJm6FZBMC2HQqFZ94NTk8+taG6J3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-5St3a7PRGWWyxFYIylc3IRk/1H4pwa4Q1K3Fs3V5gB2P4+EGb9in4BdxA9UggLeD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-P6i4agMWqG8Ro8ksVf0BmZtPG2TgSmA2xtTA3GjzOwWiEzLwExQhR2kYDvP5m0QZ" crossorigin="anonymous"></script>
</body>

</html>