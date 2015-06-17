<?php
session_start();

require('db.php');

$userid = $_SESSION['user'];

echo "<b>Please enter your comment:</b>";
$temp = $_POST['comments'];

echo "<form method='post' action=''>";
echo "<textarea name='comments' cols='30' rows='6'>";
echo "</textarea><br>";
echo "<input type='submit' value='Submit' />";
echo "</form>";

?>

