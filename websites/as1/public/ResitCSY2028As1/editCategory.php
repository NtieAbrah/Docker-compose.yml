<?php

session_start();

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
	//$category = $Stmt->fetch();
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
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
?>
<form action="editCategory.php" method="POST">
   <label>ID:</label>
    <input type="int" name="id" />
	<label>Category name:</label>
	<input type="text" name="name" />
    <input type="submit" name="submit" value="Edit" />
    
	<?php

$stmt = $pdo->prepare('SELECT * FROM category');
$stmt->execute();

foreach ($stmt as $row) {
	if ($row['id'] == ['id']) {
		echo '<option value="' . $row['id'] . '" selected="selected">' . $row['name'] . '</option>';
	}
	else {
	//	echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
	}

	$stmt->execute();

	foreach ($stmt as $row) {
		echo '<li><a href="index3.php?categoryid=' . $row['id'] . '">' . $row['name'] . '</a></li>';
	}
}

		

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
