<?php


$server = 'mysql';
$username = 'student';
$password = 'student';

$schema = 'assignment1';



if (isset($_GET['categoryid']))  {

    $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);
    
	$categoryStmt = $pdo->prepare('SELECT * FROM category WHERE id = :id');
	$articlesStmt = $pdo->prepare('SELECT * FROM article WHERE categoryid = :id');

	$values = [
		'id' => $_GET['categoryid']
	];

	$categoryStmt->execute($values);
	$articlesStmt->execute($values);

	$category = $categoryStmt->fetch();

	echo '<h1>' . $category['name'] . ' articles</h1>';

	
	foreach ($articlesStmt as $article) {
		echo '<li><a href="editArticle.php?id=' . $article['id'] . '">' . $article['title'] . '</a></li>';
	}

}