<?php

    $sub = 'deleteCategory PAGE';
		require 'header.php';
        
		

        $server = 'mysql';
        $username = 'student';
        $password = 'student';
        
        $schema = 'assignment1';
        
        $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);
        if (isset($_GET['delete'])) {
            '$id' == $_GET['delete'];
            $stmt = $pdo->prepare('DELETE FROM category WHERE id = :id');
        }   
     $categoryStmt = $pdo->prepare('SELECT * FROM category WHERE id = :id');                   
         
    ?>    

<?php
		require 'footer.php';
        ?>
