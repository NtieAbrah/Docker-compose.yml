<?php
session_start();
        $sub = 'ADMIN PAGE';
		require 'header.php';
        
        
        
        $server = 'mysql';
        $username = 'student';
        $password = 'student';
        
        $schema = 'assignment1';
        
        $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);   

   ?>
   
<?php
	if (isset($_POST['submit'])) {
		if ($_POST['password'] == 'num12') {
			$_SESSION['loggedin'] = true;	
		}
	}

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	?>

<ul>
        
                      <li><a href="addArticle.php">AddArticle</a></li>
                      <li><a href="editArticle.php">EditArticle</a></li>
                      <li><a href="addCategory.php">AddCategory</a></li>
                      <li><a href="editCategory.php">EditCategory</a></li>
                      <li><a href="deleteCategory.php">DeleteCategory</a></li>
                      <li><a href="deleteArticle.php">DeleteArticle</a></li>
					  <li><a href="adminArticles.php">AdminArticles</a></li>
                  </ul>

	<h3>You are now logged in</h3>
    <li><a href="logout.php">Logout</a></li>

	
	<?php
	}

    else {
		?>
		<h2>Admin Login </h2>

		<form action="admin.php" method="post" style="padding: 40px">

			<label>Enter Password</label>
			<input type="password" name="password" />

			<input type="submit" name="submit" value="Log In" />
		</form>
	<?php
	 }
    ?>

               
            
      <?php

		require 'footer.php';
        ?>
