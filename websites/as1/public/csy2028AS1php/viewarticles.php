<?php
 $sub = 'viewArticles page';
require 'header.php';

?>

<ul>
	<li><a href="addCategory.php">Add Category</a></li>
	<li><a href="addArticle.php">Add Article</a></li>

<h2>Select category:</h2> 

<form action="viewarticles.php" method="POST">
   <label>CommentText:</label>
    <textarea name="commentText"  cols="30" rows="10"></textarea>
    <input type = "submit" name = "comment" value = "Send Comment" />
</form>
</ul>


<?php
    
        $server = 'mysql';
        $username = 'student';
        $password = 'student';
        
        $schema = 'assignment1';
        
        $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);

        if (isset($_POST['categoryid']))  {
   
            $categoryStmt = $pdo->prepare('SELECT * FROM category WHERE id = :id');
            $articlesStmt = $pdo->prepare('SELECT * FROM article WHERE categoryid = :id');
        
            $values = [
                'id' => $_POST['categoryid']
            ];
        
            $categoryStmt->execute($values);
            $articlesStmt->execute($values); 
        
        
            $category = $categoryStmt->fetch();
        
            echo '<h1>' . $category['name'] . ' articles</h1>';
        
            foreach ($articlesStmt as $article) {
                echo '<li><a href="editArticle.php?id=' . $article['id'] . '">' . $article['name'] . '</a></li>';
            }
        }

        $stmt = $pdo->prepare('SELECT * FROM category');

	$stmt->execute();

	foreach ($stmt as $row) {
		echo '<li><a href="index3.php?categoryid=' . $row['id'] . '">' . $row['name'] . '</a></li>';
	}

?>
<?php
		require 'footer.php';
        ?>




