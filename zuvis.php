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
      <a class="navbar-brand" href="zuvys.php">Zuvys</a>  
      <a class="navbar-brand" href="tipai.php">Tipas</a>
      <a class="navbar-brand" href="masalai.php">Masalas</a>
      <a class="navbar-brand" href="index.php">Pagrindinis</a>
    </div>
  </div>
</nav>
    
<?php

include 'config.php';
include 'connection.php';

$id = $_GET['id'];

 $sql="SELECT 
            zuvys 
      FROM 
            zuvys
      WHERE 
            id='$id'";

$results = mysqli_query($db, $sql);
while($row=mysqli_fetch_assoc($results)){
   echo "<img src='img/".$row['zuvys'].".jpg' alt='".$row['zuvys']."' 
                height='150' width='200' /><br />";
}

$sql1 ="SELECT
                    tipas_zuvys.tipas_id, tipas.tipas
        FROM 
                    tipas_zuvys
        LEFT JOIN 
                    tipas
                    ON tipas.id = tipas_zuvys.tipas_id
        WHERE 
                    tipas_zuvys.zuvys_id ='".$id."'";

echo 'Gaudoma:<br>';
$results_tipas = mysqli_query($db, $sql1);
while($row=mysqli_fetch_assoc($results_tipas)){
   echo $row['tipas'].'<br>';
}

$sql2 = "SELECT 
                    masalas_id, masalas.masalas
        FROM 
                    zuvys_masalas
        LEFT JOIN 
                    masalas
                    ON zuvys_masalas.masalas_id = masalas.id
        WHERE 
                    zuvys_id = '".$id."'";

echo 'Kimba ant:<br>';
$results_tipas = mysqli_query($db, $sql2);
while($row=mysqli_fetch_assoc($results_tipas)){
   echo $row['masalas'].'<br>';
}

mysqli_close($db); 
?>
    
    </body>
</html>