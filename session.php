<?php
include("db/conexion.php");//Contiene de conexion a la base de datos

session_start();// Iniciando Sesion
// Guardando la sesion
$user_check=$_SESSION['ini_ses'];
// SQL Query para completar la informacion del usuario
$ses_sql=mysqli_query($con, "select email from especialistas where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
if(!isset($login_session)){
mysqli_close($conexion); // Cerrando la conexion
header('Location: index.php'); // Redirecciona a la pagina de inicio
}
?>