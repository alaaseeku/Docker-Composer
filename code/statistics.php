<?php
include ('conn.php');

echo "System Databases : \n";

$db_list = mysqli_query($mysqli, "SHOW DATABASES");
while ($row = mysqli_fetch_row($db_list)) {
 echo "<br><li> ".$row[0]."\n";
}  

echo "<br> System Users : \n";
$db_list = mysqli_query($mysqli, "select user from mysql.user");
while ($row = mysqli_fetch_row($db_list)) {
 echo "<br><li> ".$row[0]."\n";
}



?>
