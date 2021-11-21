<?php

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
?>
<form action="addcategory.php" method="POST">
	<label>Category name:</label>
	<input type="text" name="name" />
    <input type="submit" name="submit" value="Add" />
    
	<?php

		}

	?>
	
</form>
<?php

?>

<?php
		require 'footer.php';
        ?>
