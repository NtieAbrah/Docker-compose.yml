<?php
session_start();
?>

<?php

$sub = 'adminArticles PAGE';
		require 'header.php';
?>
        <ul>

        <h2>List of Articles and Publish date:</h2>
        <ul>

        <?php
    
    $server = 'mysql';
    $username = 'student';
    $password = 'student';
    
    $schema = 'assignment1';
    
    $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);

    if (isset($_POST['title']))  {

        $articlesStmt = $pdo->prepare('SELECT * FROM article WHERE title = :id');
    
        $values = [
            'id' => $_POST['title']
        ];
    
        $articlesStmt->execute($values); 
    
    
        $article = $articleStmt->fetch();
    
?>

<?php 
    }
      else {
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 

    $stmt = $pdo->prepare('SELECT * FROM article');
    ?> 
    
 <?php
    
?>  
  <?php
$stmt->execute();

foreach ($stmt as $row) {
    echo '<li><a href="index3.php?title=' . $row['id'] . '">' . $row['title'] . ' : ' . $row['publishDate']  . '</a></li>';
}
 ?>

      <h3>Articles Links</h3>

      </ul>
              <ul>

					<li><a href="deleteArticle.php">DeleteArticle</a></li>
                    <li><a href="editArticle.php">EditArticle</a></li>
                    <li><a href="addArticle.php">AddArticle</a></li>
                    
				</ul>

</ul>
          
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






