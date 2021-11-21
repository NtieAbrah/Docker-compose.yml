<?php

session_start();
        $sub = 'LOGIN PAGE';
		require 'header.php';

$server = 'mysql';
$username = 'student';
$password = 'student';

$schema = 'assignment1';
        
$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);
if (isset($_POST['submit'])) {
 
     $stmt = $pdo->prepare('SELECT * FROM user WHERE email = :email AND password = :password');
   
$values = [
 'email' => $_POST['email'],
 'password' => $_POST['password']
];

$stmt->execute($values);

if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch();
    $_SESSION['loggedin'] = $user['id'];
      
    echo 'You are now logged in, <a href="logout.php">Go to logout.php</a>';
    echo '<p>Welcome back ' . $_POST['email'] .'</p>';
    echo '<p> You are seeing this message because you entered the correct login credentials!!</p>'; 
   }

   else {
    
    echo '<a href="login.php">Wrong email or password Go to login.php</p>';
    echo '<a href="register.php">Wrong email or password, new user Go to register.php</p>';
   }
   }
 
else { 
?>

<form action="login.php" method="POST">
<h2>Login with Email and Password</h2>
 <label>Email: </label>
 <input type="text" name="email"/>
 <label>Password: </label>
 <input type="password" name="password"/>
 <input type="submit" name="submit" value="SUBMIT" />
</form>
<?php
}

		require 'footer.php';
        ?>
