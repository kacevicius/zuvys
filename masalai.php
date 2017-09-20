<?php

include 'config.php';
include 'connection.php';

$sql="SELECT 
            masalas, id 
      FROM 
            masalas";

$results = mysqli_query($db, $sql);

echo '<ul>'; 
while($row=mysqli_fetch_assoc($results)){
    echo "<li><a href=masalai.php?id=" . $row['id'] . ">" . $row['masalas'] . " </a></li>";
}
echo '</ul>';

mysqli_close($db);
?>
