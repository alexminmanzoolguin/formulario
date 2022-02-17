<?php
$alert ='';
if(!empty($_POST)){
if(empty($_POST['usuario'])|| empty($_POST['contrasenia'])){
    $alert='Ingrse su usuario y su clave';
}else{
    require_once "conexion.php";
    $user= $_POST['usuario'];
    $pass=$_POST['contrasena'];
    $query=mysqli_query($conection,"SELECT* FROM usuario where usuario ='$user' AND clave= '$pass'");
    $result= mysqli_num_rows($query);

    if($result>0){
        $data=mysqli_fetch_array($query);
        print_r($data);
    }
}

}

?>