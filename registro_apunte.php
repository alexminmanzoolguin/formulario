<?php
session_start();
include "conexion.php";
if (!empty($_POST))
{

    //print_r($_FILES);

    //exit;
        $alert='';
   if (empty($_POST['nombre'])||empty($_POST['archivo'])||empty($_POST['semana'])){
       $alert='<p class="msg_error">todos los campos son obligatorio.</p>';
   }else{

$nombre=$_POST['nombre'];
$correo=$_POST['archivo'];
$usuario=$_POST['semana'];



$query_insert = mysqli_query($conection,"INSERT INTO usuario(nombre,correo,usuario,contrasena,img_usuario,id_usuario,id_rol) VALUES('$id_usuario','$nombre','$correo','$usuario','$contrasena','$imgusuario','$rol')");
           if ($query_insert) {
               
               $alert='<p class="msg_save"> USUARIO GUARDADO CORRECTAMENTE</p>'; }else{
               $alert='<p class="msg_error">ERROR AL GUARDAR EL USUARIO</p>';
           }

       }
   }
?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "scripts.php" ?>
        <title>REGISTRO USUARIO</title>
        <link rel="stylesheet" type="css"" href="style2.css">
    </head>
    <body>
    <?php include "header.php" ?>
        <section id="contanier">

        <div class="form_register">
			
        <h1><i class="fas fa-user"></i> REGISTRO USUARIO</h1>
        <div class="alert"><?php echo isset($alert) ? $alert:'';  ?></div>
		<form action="" method="post">
		<label for="nombre">ID_USUARIO</label>
        <input type="text" name="id_usuario"o id="id_usuario" placeholder="id_usuario">
		<label for="nombre">NOMBRE</label>
        <input type="text" name="nombre"o id="nombreusuario" placeholder="NOMBRE USUARIO">
        <label for="correo">CORREO</label>
        <input type="text" name="correo"o id="correo" placeholder="CORREO">
        <label for="usuario">USUARIO</label>
        <input type="text" name="usuario"o id="usuario" placeholder="USUARIO">
        <label for="clave">CLAVE</label>
					<input type="password" name="clave" id="clave" placeholder="Clave de acceso">
        
    
						
					</select>
						

       <input type="submit" value="Registrar">
						
				</form>

                </div>
        </section>
						
    </body>
</html>