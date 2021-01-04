<!--
Author: Anna-Maria Berezovski
Date: January 4, 2021
Description: This page is the third in sequence. sentences.php redirects to this page directly
             In this page, the information from the form on sentences.php is inputted into the database.
             Once all the data has been input, a button labeled HOME is presented to take the user back to
             home.php. 
-->

<!DOCTYPE HTML>
<html>
<body>

    <form action="home.php" method="POST">
        <input type="submit" value="HOME">
    </form>

<?php
// Instanciating the variables
    $sen1 = $sen2 = $sen3 = $sen4 = $sen5 = $sen6 = $sen7 = $sen8 = $sen9 = $sen10 = " ";
    $id1 = $id2 = $id3 = $id4 = $id5 = $id6 = $id7 = $id8 = $id9 = $id10 = " ";


try {
        $pdo = new PDO("mysql:dbname=ab477869db;host=localhost;charset=utf8", "ab477869", "chineseisthebest");

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //echo "Connection Good. Host info: ". $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
    } catch(PDOException $e) {
        die("ERROR: Could not connect. " . $e->getMessage());
    }

            		$sen_val1  = $_POST['sen1'];
            		$sen_val2  = $_POST['sen2'];
            		$sen_val3  = $_POST['sen3'];
            		$sen_val4  = $_POST['sen4'];
            		$sen_val5  = $_POST['sen5'];
            		$sen_val6  = $_POST['sen6'];
            		$sen_val7  = $_POST['sen7'];
            		$sen_val8  = $_POST['sen8'];
            		$sen_val9  = $_POST['sen9'];
            		$sen_val10 = $_POST['sen10'];

                    session_start();
                    $id1 =  $_SESSION['id1s'];
                    $id2 =  $_SESSION['id2s'];
                    $id3 =  $_SESSION['id3s'];
                    $id4 =  $_SESSION['id4s'];
                    $id5 =  $_SESSION['id5s'];
                    $id6 =  $_SESSION['id6s'];
                    $id7 =  $_SESSION['id7s'];
                    $id8 =  $_SESSION['id8s'];
                    $id9 =  $_SESSION['id9s'];
                    $id10 = $_SESSION['id10s'];

// ----------------------------------------------------------------------------------------------------
            try {
                $idinsert = "INSERT INTO lvl_form (id,level) VALUES ($id1, $sen_val1)";
                $pdo->exec($idinsert);
                
            } catch(PDOException $e) {
                die("ERROR: Could not execute $idinsert or $seenupdate" . $e->getMessage());
            }
// ----------------------------------------------------------------------------------------------------
            try {
                $idinsert = "INSERT INTO lvl_form (id,level) VALUES ($id2, $sen_val2)";
                $pdo->exec($idinsert);
            
            } catch(PDOException $e) {
                die("ERROR: Could not execute $idinsert " . $e->getMessage());
            }
// ----------------------------------------------------------------------------------------------------
            try {
                $idinsert = "INSERT INTO lvl_form (id,level) VALUES ($id3, $sen_val3)";
                $pdo->exec($idinsert);
            
            } catch(PDOException $e) {
                die("ERROR: Could not execute $idinsert " . $e->getMessage());
            }
// ----------------------------------------------------------------------------------------------------
            try {
                $idinsert = "INSERT INTO lvl_form (id,level) VALUES ($id4, $sen_val4)";
                $pdo->exec($idinsert);
            
            } catch(PDOException $e) {
                die("ERROR: Could not execute $idinsert " . $e->getMessage());
            }
// ----------------------------------------------------------------------------------------------------
            try {
                $idinsert = "INSERT INTO lvl_form (id,level) VALUES ($id5, $sen_val5)";
                $pdo->exec($idinsert);
                
            } catch(PDOException $e) {
                die("ERROR: Could not execute $idinsert " . $e->getMessage());
            }
// ----------------------------------------------------------------------------------------------------
            try {
                $idinsert = "INSERT INTO lvl_form (id,level) VALUES ($id6, $sen_val6)";
                $pdo->exec($idinsert);
            
            } catch(PDOException $e) {
                die("ERROR: Could not execute $idinsert " . $e->getMessage());
            }
// ----------------------------------------------------------------------------------------------------
            try {
                $idinsert = "INSERT INTO lvl_form (id,level) VALUES ($id7, $sen_val7)";
                $pdo->exec($idinsert);
                
            } catch(PDOException $e) {
                die("ERROR: Could not execute $idinsert " . $e->getMessage());
            }
// ----------------------------------------------------------------------------------------------------
            try {
                $idinsert = "INSERT INTO lvl_form (id,level) VALUES ($id8, $sen_val8)";
                $pdo->exec($idinsert);
                
            } catch(PDOException $e) {
                die("ERROR: Could not execute $idinsert " . $e->getMessage());
            }
// ----------------------------------------------------------------------------------------------------
            try {
                $idinsert = "INSERT INTO lvl_form (id,level) VALUES ($id9, $sen_val9)";
                $pdo->exec($idinsert);
             
            } catch(PDOException $e) {
                die("ERROR: Could not execute $idinsert " . $e->getMessage());
            }
// ----------------------------------------------------------------------------------------------------
            try {
                $idinsert = "INSERT INTO lvl_form (id,level) VALUES ($id10, $sen_val10)";
                $pdo->exec($idinsert);
   
            } catch(PDOException $e) {
                die("ERROR: Could not execute $idinsert " . $e->getMessage());
            }

?>
</body>
</html>
