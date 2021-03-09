<?php 
session_start();
 ?>

 <style type="text/css">
 	 	#cont{
 		text-align: center;
 	}
 	form{
 		height: 50px;
 		width: 300px;
 		margin-top: 100px;
 		margin-left:500px;
 		margin-bottom: 10px
 	}
 	form input{
 		border: 1px solid #b8b5ff;
 		border-radius: 5px;
 		width: 100%;
 		margin:2px;
 	}
 	input .btn{
 		width: 50%;
 	}

 	a{
 	 	margin-left: 5px;
 	 	color: #7868e6;
 	 	transition: 0.8s
 	 	}	

 	a:hover{
 	 		transition: 1s;
 	 		color: #383e56
 	 	}

 </style>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<div id="cont">
     <form action="get.php" method="GET" >
      <input type="number" name="valor" placeholder="Valor" min="1" max="10"><br>
      <input type="submit" name="btn" value="Enviar" class="btn">
     </form>

      <a href="rec.php">Recorrer valores</a>
      <a center href="clears.php">Cerrar session</a>

</div>
</body>
</html>

<?php 

 $id = base64_decode(filter_input(INPUT_GET, 'id'), FILTER_SANITIZE_NUMBER_INT);

?>

<p style="text-align: center;"><?php echo "$id"; ?></p>

<?php

 $_SESSION['id'] = $id;

if($id){
$pares = array($id);

while (list ($i, $id) = each($pares)) 
{
 if (!($id % 2))
  {                                
 continue;
  }
 return header("Location:index.php?val=El numero es impar");
}
array_push($pares);

}
$va1 = $_SESSION['id'];

$pares['valor1']=$va1;

$_SESSION['devu'][$va1]= $pares;

 ?>
