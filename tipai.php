<?php

include 'config.php';
include 'connection.php';

$sql="SELECT 
            tipas, id 
      FROM 
            tipas";

$results = mysqli_query($db, $sql);

echo '<ul>'; 
while($row=mysqli_fetch_assoc($results)){
    echo "<li><a href=tipas.php?id=" . $row['id'] . ">" . $row['tipas'] . " </a></li>";
}
echo '</ul>';

mysqli_close($db);
?>

