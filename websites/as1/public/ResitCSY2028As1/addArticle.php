<?php
session_start();

?>
<?php	
      $sub = 'ARTICLE PAGE';
		require 'header.php';
		   
$server = 'mysql';
$username = 'student';
$password = 'student';

$schema = 'assignment1';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);
if (isset($_POST['submit'])) {
    

	$stmt = $pdo->prepare('INSERT INTO  article (title, content, categoryid) VALUES (:title ,:content ,:categoryid)');

	$values = [
		'title' => $_POST['title'],
        'content' => $_POST['content'],
        'categoryid' => $_POST['categoryid']
        
	];

	$stmt->execute($values);
	echo 'Article  ' . $_POST['title'] . ' added';
}

else {
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	
?>
<form action="addArticle.php" method="POST">
	<label>Article title:</label>
	<input type="text" name="title" />
    <label>Content:</label>
	<input type="text" name="content" />
    <label>Category:</label>
    <select name="categoryid">
	
<?php

    $stmt = $pdo->prepare('SELECT * FROM category');
		$stmt->execute();

		foreach ($stmt as $row) {
			echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
		}
		?>
		</select>
<input type="submit" name="submit" value="Add" />
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
