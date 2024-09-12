<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopEasy Online</title>
    <link rel="stylesheet" href="./assets/style.css"> <!-- External CSS for styling -->
</head>
<body>

    <!-- Header and Navigation -->
    <header>
    <?php
        include "nav.php";
    ?>
    </header>

    <!-- Hero Section -->
<?php
    include "herosection.php";
?>

    <!-- Category Section -->
<?php
    include "product.php";
?>

    <!-- Product Slideshow Section -->
<?php
    include "feature.php";
?>

    <!-- Testimonial Section -->
<?php
    include "testimonial.php";
?>

    <!-- Footer -->
<?php

    include "footer.php";
?>

</body>
</html>
