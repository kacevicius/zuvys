<?php 

$db=mysqli_connect($db_host, $db_user, $db_pass);
mysqli_select_db($db, $db_name);
mysqli_set_charset($db, $db_charset);

?>
