<?php
session_start();
$sub = 'LOGOUT PAGE';
require 'header.php';

unset($_SESSION['loggedin']);
echo 'You are now logged out
<a href="login.php">Go to
login.php</a>';

echo '<p> You are seeing this message because you logged out successfully!!</p>';

require 'footer.php';
        
?>

