<?php

$sub = 'adminCategories PAGE';
		require 'header.php';
        ?>

<ul>

<h2>Category List</h2>

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
    }
        else {
            ?>

<?php 
    
    $stmt = $pdo->prepare('SELECT * FROM category');
    ?> 
    
 <?php

?>  
  <?php
$stmt->execute();

foreach ($stmt as $row) {
    echo '<li><a href="index3.php?categoryid=' . $row['id'] . '">' . $row['name'] . '</a></li>';
}
}      
?>

     <ul>

      <h3>Links</h3>

      </ul>

              <ul>

					<li><a href="Sports.php">Sports</a></li>
					<li><a href="Food.php">Food</a></li>
					<li><a href="Clothing.php">Clothing</a></li>
                    <li><a href="addCategory.php">AddCategory</a></li>
                    <li><a href="editCategory.php">EditCategory</a></li>
				</ul>
                

<?php
		require 'footer.php';
        ?>
