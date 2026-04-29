<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My PHP Website</title>
        <style>
            body { font-family: 'Raleway', Arial, Helvetica, sans-serif; margin: 0; padding: 0; background: #0a0a0a; color: #e8c96a; }
            nav { background: linear-gradient(90deg, #0a0a0a 0%, #1a1400 50%, #0a0a0a 100%); padding: 0 40px; border-bottom: 1px solid #b8960c; box-shadow: 0 2px 20px rgba(184,150,12,0.3); display: flex; align-items: center; justify-content: space-between; height: 64px; position: relative; }
            nav a { color: #e8c96a; margin: 0; text-decoration: none; }
        </style>
    </head>
    <body style="font-family: 'Raleway', sans-serif; margin: 0; padding: 0; background: #0a0a0a; color: #e8c96a;">

        <nav style="background: linear-gradient(90deg, #0a0a0a 0%, #1a1400 50%, #0a0a0a 100%); padding: 0 40px; border-bottom: 1px solid #b8960c; box-shadow: 0 2px 20px rgba(184,150,12,0.3); display: flex; align-items: center; justify-content: space-between; height: 64px; position: relative;">

            <div style="display: flex; gap: 8px; align-items: center;">
                <?php
                echo '<a href="index.php" style="color: #e8c96a; text-decoration: none; font-family: Arial, Helvetica, sans-serif; font-size: 12px; letter-spacing: 2px; text-transform: uppercase; padding: 8px 20px; border: 1px solid transparent;">Home</a>';
                echo '<a href="about.php" style="color: #e8c96a; text-decoration: none; font-family: Arial, Helvetica, sans-serif; font-size: 12px; letter-spacing: 2px; text-transform: uppercase; padding: 8px 20px; border: 1px solid transparent;">About</a>';
                echo '<a href="contact.php" style="color: #e8c96a; text-decoration: none; font-family: Arial, Helvetica, sans-serif; font-size: 12px; letter-spacing: 2px; text-transform: uppercase; padding: 8px 20px; border: 1px solid transparent">Contact</a>';
                ?>
            </div>
        </nav>

    </body>
</html>