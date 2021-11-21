<?php

$sub = 'editCATEGORY PAGE';
		require 'header.php';
        
        
$server = 'mysql';
$username = 'student';
$password = 'student';

$schema = 'assignment1';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);


if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('UPDATE category
						   SET name = :name  WHERE id = :id');
						  

	$values = [
		'name' => $_POST['name'],
		'id' => $_POST['id']
	];

	$stmt->execute($values);
	echo 'Category ' . $_POST['name'] . ' edited';
}
else if (isset($_GET['id'])) {

	$categoryStmt = $pdo->prepare('SELECT * FROM category WHERE id = :id');

	$values = [
		'id' => $_GET['id']
	];

	$categoryStmt->execute($values);

	$category = $categoryStmt->fetch();
}
else{
?>
<form action="editCategory.php" method="POST">
   <label>ID:</label>
    <input type="int" name="id" />
	<label>Category name:</label>
	<input type="text" name="name" />
    <input type="submit" name="submit" value="Edit" />
    
	<?php

		}

	?>
	
</form>
<?php

?>

<?php
		require 'footer.php';
        ?>
