<?php

session_start();

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
        
        else {
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            ?>
            <form action="deleteCategory.php" method="POST">
                <label>Category:</label>
                <input type="text" name="category" />

                <?php   
     $categoryStmt = $pdo->prepare('SELECT * FROM category WHERE id = :id'); 
     
     ?>

     </select>
     <input type="submit" name="submit" value="Delete" />
     </form>
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
