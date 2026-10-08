<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hoja de vida php</title>
</head>
<body>
 <?php
    $nombre="Catalina Caipe";
    $profesion=" Estudiante De Ingenieria de Sistemas";
    $edad= 10;
    $habilidades= 
    
   
 ?>
  <h1><?php echo $nombre; ?></h1>
<h2><?php echo $profesion; ?></h2>

 <p><?php echo "Soy" , $nombre , "y soy" , $profesion ?></p> 
<?php if($edad >=18):?>
<p> Disponible para trabajar</p>
<?php else: ?>
<p> Menor de edad - no puede trabajar</p>
<?php endif; ?>
    
</body>
</html>