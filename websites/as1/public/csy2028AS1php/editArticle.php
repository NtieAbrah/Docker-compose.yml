<?php

      $sub = 'editARTICLE PAGE';
		require 'header.php';
       

$server = 'mysql';
$username = 'student';
$password = 'student';

$schema = 'assignment1';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);
if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('UPDATE article
						   SET title = :title , content = :content, categoryid = :categoryid WHERE id = :id');
						   

	$values = [
		'title' => $_POST['title'],
		'content' => $_POST['content'],
        'categoryid' => $_POST['categoryid'],
		'id' => $_POST['id']
	];


	$stmt->execute($values);
	echo 'Article  ' . $_POST['title'] . ' edited';
}

 else if (isset($_GET['id'])) {

	$articleStmt = $pdo->prepare('SELECT * FROM article WHERE id = :id');

	$values = [
		'id' => $_GET['id']
	];

	$articleStmt->execute($values);

	$article = $articleStmt->fetch();
}
    else{
?>
<form action="editArticle.php" method="POST">
   <label>ID:</label>
   <input type= "int" name="id" />
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
			if ($row['id'] == $article['categoryid']) {
				echo '<option value="' . $row['id'] . '" selected="selected">' . $row['name'] . '</option>';
			}
			else {
				echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
			}
		}
    
		//foreach ($stmt as $row) {
			//echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
		//}
        ?>

</select>
<input type="submit" name="submit" value="Edit" />
</form>
<?php
}
?>

<?php
		require 'footer.php';
        ?>
