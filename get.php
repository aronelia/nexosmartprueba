<?php 
session_start();

$_SESSION['id'] = $id;


 $var = $_GET['valor'];

 
 $dato = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_INT);



 $dato = base64_encode($var);


  header("Location:index.php?id=$dato");

?>
