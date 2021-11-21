<?php

        $sub = 'ADMIN PAGE';
		require 'header.php';
        
        
        
        $server = 'mysql';
        $username = 'student';
        $password = 'student';
        
        $schema = 'assignment1';
        
        $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);   

   ?>

        <ul>
        <h2>Functionality Links</h2>
                      <li><a href="addArticle.php">AddArticle</a></li>
                      <li><a href="editArticle.php">EditArticle</a></li>
                      <li><a href="addCategory.php">AddCategory</a></li>
                      <li><a href="editCategory.php">EditCategory</a></li>
                      <li><a href="deleteCategory.php">DeleteCategory</a></li>
                      <li><a href="deleteArticle.php">DeleteArticle</a></li>
                  </ul>
        
      <?php

		require 'footer.php';
        ?>
