<?php

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css"/>
		<title>Northampton News - Home</title>
	</head>
	<body>
		<header>
			<section>
				<h1>Northampton News</h1>
				
			</section>
		</header>
		<nav>
			
			<ul>
				<li><a href="index.php">Latest Articles</a>
			
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
	}
		else {
			?>

<?php 
			
	$stmt = $pdo->prepare('SELECT * FROM article');
	?> 
	
 <?php

?>  
  <?php
$stmt->execute();

foreach ($stmt as $row) {
	echo '<li><a href="index3.php?title=' . $row['id'] . '">' . $row['title'] . ' : ' . $row['publishDate']  . '</a></li>';
}
} 

?>
						</li>
					</ul>

				<li><a href="index.php">Home</a>
				<li><a href="admin.php">Admin</a>

				<li><a href="#">Select Category</a>
				
					<ul>
						<li><a class="articleLink" href="index3.php?categoryid=4">Clothing</a></li>
						<li><a class="articleLink" href="index3.php?categoryid=1">Sports</a></li>
						<li><a class="articleLink" href="index3.php?categoryid=5">Food</a></li>
						
					</ul>
				</li>
			</ul>
		</nav>
		<img src="images/banners/randombanner.php" />
		<main>
			<!-- Delete the <nav> element if the sidebar is not required -->
			<nav>
				<ul>

				<li><a href="addCategory.php">Add Category</a></li>
	            <li><a href="addArticle.php">Add Article</a></li>

					<li><a href="#">Sidebar</a></li>
					<li><a href="#">This can</a></li>
					<li><a href="#">Be removed</a></li>
					<li><a href="#">When not needed</a></li>
				</ul>
			</nav>

			<article>
					
</ul>

<?php

?>

<ul>

<h2>Articles and Publish date:</h2>

</ul>
 
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
        }
            else {
                ?>
    
<?php 
            
            
        $stmt = $pdo->prepare('SELECT * FROM article');
        ?> 
        
     <?php
    
    ?>  
      <?php
	$stmt->execute();

	foreach ($stmt as $row) {
		echo '<li><a href="index3.php?title=' . $row['id'] . '">' . $row['title'] . ' : ' . $row['publishDate']  . '</a></li>';
}
} 

?>
		
			</article>
		</main>
				

		<footer>
			&copy; Northampton News 2017
		</footer>

	</body>
</html>
