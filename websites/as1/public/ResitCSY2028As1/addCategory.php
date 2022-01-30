<?php

session_start();

$sub = 'CATEGORY PAGE';
		require 'header.php';
               
$server = 'mysql';
$username = 'student';
$password = 'student';

$schema = 'assignment1';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);

if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('INSERT INTO  category (name) VALUES (:name)');

	$values = [
		'name' => $_POST['name'],
	
	];

	$stmt->execute($values);
	echo 'Name' . $_POST['name'] . ' added';
}
else {
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
?>
<form action="addcategory.php" method="POST">
	<label>Category name:</label>
	<input type="text" name="name" />
    <input type="submit" name="submit" value="Add" />
    
	<?php

	?>
	
</form>
<?php
}
else{
	?>
<h2>Admin Users Only : Login</h2>

<form action="admin.php" method="post" style="padding: 40px">

	<label>Enter Password</label>
	<input type="password" name="password" />

	<input type="submit" name="submit" value="Log In" />
</form>
<?php
}
}

?>

<?php
		require 'footer.php';
        ?>
