

<?php

$sub = 'REGISTRATION PAGE';

require 'header.php';

$server = 'mysql';
$username = 'student';
$password = 'student';

$schema = 'assignment1';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);
if(isset($_POST['submit'])){
$stmt = $pdo->prepare('INSERT INTO  users( name, email, password) VALUES ( :name, :email, :password )');

	$values = [
		'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
        
	];

	$stmt->execute($values);
    echo 'User ' . $_POST['name'] . ' Registered ';
    echo 'User can login now, <a href="login.php">Go to login.php</a>';
}
else {

    ?>

<form action = "register.php" Method="POST">
     <h2>Registration</h2>
     <p>Fill with correct values</p>
            <label for="name">Name:</label>
            <input type="text" name="name" required/>
            <label for="email">Email:</label> 
            <input type="text" name="email" required/>
            <label for="password">Password:</label> 
            <input type="password" name="password" required/>
            <input type="submit" name="submit" value="Register">

</form>

<?php

}
		require 'footer.php';
        ?>
