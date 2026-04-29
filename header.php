<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My PHP Website</title>
        <style>
            body { font-family: Arial, Helvetica, sans-serif; margin: 0; padding: 20px; background: white;}
            nav {background: #333; padding: 10px;}
            nav a {color: white; margin: 0 15px; text-decoration: none;}
            .container {background: white;padding: 20px; margin-top: 20px;border-radius: 5px;}
        </style>
    </head>
    <body>
        <nav>
            <?php
            echo '<a href="index.php">Home</a>';
            echo '<a href="about.php">About</a>';
            echo '<a href="contact.php">Contact</a>';
            ?>
        </nav>
        <div class="container">
    </body>
