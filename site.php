<?php
session_start();

require('db.php');

$userid = $_SESSION['user'];
$siteid = $_GET['site_id'];

echo "<b>Please enter your comment:</b>";
$temp = $_POST['comments'];

echo "<form method='post' action='addcomment.php'>";
echo "<textarea name='comments' cols='30' rows='6'>";
echo "</textarea><br>";
echo "<input type='hidden' name='tempid' value='$siteid' />";
echo "<input type='submit' value='Submit' />";
echo "</form>";

$sql = "SELECT message FROM Comments";
$result = $connect->query($sql);


echo "<b>Here are some comments: </b><br>";

if($result->num_rows > 0)
{
 while($row = $result->fetch_assoc())
 {
  $message = $row["message"];
  echo "<ul>";
  echo "<li>$message</li>";
  echo "</ul>";
 }
}
else
echo "Nothing in table";


?>

