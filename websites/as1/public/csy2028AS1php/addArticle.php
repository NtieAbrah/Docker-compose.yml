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
?>

<?php
		require 'footer.php';
        ?>
