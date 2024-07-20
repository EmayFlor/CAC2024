<?php 
 require ('Connect.php');
 $nombre=$_REQUEST['nombre'];
 $apellido=$_REQUEST['apellido']; //
 $email=$_REQUEST['email'];   //  
 $contacto=$_REQUEST['contacto'];
 $query="INSERT INTO info VALUES ('','$nombre', '$apellido', '$email', '$contacto')"; //el primer dato vacio es el id, que es autoincremental en la BD
 $sql=mysqli_query($link,$query);
 header('Location: index.html');
?>
