<?php 
session_start();

 $id=$_SESSION['id'];

 ?>

<style type="text/css">

    h1 , h2 {
        text-align: center;
        color: #7868e6;
    }
    #mid{
        text-align: center;
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

     <h1>Session usuario</h1>
     <h2><?php echo "valor ingresado  $id"; ?></h2>

   <div id="mid">

     	<?php 
     	foreach ($_SESSION['devu'] as $row)
            {
            echo "Ingresé al array y tengo el ID: ".$row['valor1']."</br>";
            }      	      
        ?> 

     <a href="index.php">Agregar otro id</a>
     <a href="clears.php">Cerrar session</a>

</div>

