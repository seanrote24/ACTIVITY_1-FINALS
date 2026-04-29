<?php
include 'header.php';

echo '<h1>Welcome to My Simple PHP website.</h1>';
echo '<p>This is the home page. No database is used in this project.</p>';
echo '<p>Today is ' . date('l, F j, Y') . '.</p>';
echo '<ul>';
echo '<li>Pure PHP with echo only.</li>';
echo '<li> No variables stored</li>';
echo '<li> No database connection.</li>';
echo '</ul>';

include 'footer.php';
?>
