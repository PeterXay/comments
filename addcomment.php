<?php

session_start();

require('db.php');

$userlog = $_SESSION['user'];
$temp = $_POST['comments'];
$siteid = $_POST['tempid'];

$sql = "INSERT INTO Comments (site_id, site_unique_id, user_id, message, created) VALUES ('$siteid','1','$userlog','$temp', now() )";

if (mysqli_query($connect, $sql)) {
               echo "Your comment  has been created successfully";
	       header("Location: http://comments.com/site.php?site_id=$siteid"); 
               //exit();
        }

        else {
                echo "Error: " . $query . "<br>" . mysqli_error($connect);
        }
?>
