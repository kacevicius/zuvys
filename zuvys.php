<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="tipai.php">Tipas</a>
      <a class="navbar-brand" href="masalai.php">Masalas</a>
      <a class="navbar-brand" href="index.php">Pagrindinis</a>
    </div>
  </div>
</nav>
    <img src="img/zuvys.jpg" height="250" width="250"/>
<?php

include 'config.php';
include 'connection.php';

$sql="SELECT 
            zuvys, id 
      FROM 
            zuvys";

$results = mysqli_query($db, $sql);

echo '<h3><ul>'; 
while($row=mysqli_fetch_assoc($results)){
    echo "<li><a href=zuvis.php?id=" . $row['id'] . ">" . $row['zuvys'] . " </a></li>";
}
echo '</ul></h3>';

mysqli_close($db);
?>

    </body>
</html>
