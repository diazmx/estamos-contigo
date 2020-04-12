<?php
    include('db/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio | #EstamosContigo</title>
    <?php include('includes/head.php');
        session_start();// Iniciando Sesion
    ?>
</head>
<body>
    <?php include('includes/nav.php') ?>
    <div class="container"><br>
    <div id="ini_ses" class="card-panel blue-grey lighten-5">
        <blockquote><h2>Inicia sesión</h2></blockquote>
        <form name="ini_ses" id="ini_ses" action="ini_ses.php" method="post">
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <input name="email"  id="email" type="email" class="validate">
                    <label for="email">Correo</label>
                </div>
                <div class="input-field col s12 m12 l12">
                    <input name="pass" id="pass" type="password" class="validate">
                    <label for="pass">Contraseña</label>
                </div>
                <p><b>Nota: </b> la contraseña le fue asignada el día que fue aprovado en la plataforma. <br>
                En caso de haber olvidado la contraseña contactese con el administrador.</p><br>
                <center>
                    <a href="index.php" class="btn red">Cancelar<i class="material-icons right">cancel</i></a>
                    <button class="btn green" type="submit" id="ini_ses" name="ini_ses">
                        Iniciar Sesión
                        <i class="material-icons right">check</i>
                    </button>
                </center>
            </div>
        </form>
    </div>
    </div><br>
    <?php include('includes/footer.php') ?>
    <?php include('includes/script.php') ?>
</body>
</html>

<?php
if(isset($_POST['ini_ses'])){ 
    if($_POST['email'] != "" && $_POST['pass'] != ""){
        
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = mysqli_query($conexion,"SELECT * FROM especialista WHERE email = '".$email."'");
            
        if (mysqli_num_rows($sql) == 0){ 
            echo '<script>swal("Correo no registrado", "Corrobore que el correo este escrito correctamente, no encontramos coincidencias.", "error");</script>';
            header("Location:ini_ses.php");
        }else{
            $row = mysqli_fetch_array($sql);
            $is_active = $row['is_active'];
            if($is_active == 0){
                echo '<script>swal("Cuenta no activa", "Recibimos tu perfil con exito, pero tu cuenta aun no hs sido activada, nos pondremos en contacto contigo cuanto antes.", "error");</script>';
                header("Location:ini_ses.php");
            }else{
                $sql = mysqli_query($conexion,"SELECT * FROM especialista WHERE email = '".$email."' and pass='".$pass."'");
                if (mysqli_num_rows($sql) == 0){
                    echo '<script>swal("Contraseña incorrecta", "", "error");</script>';
                    header("Location:ini_ses.php");
                }else{
                    //echo '<script>swal("Bienvenido", "", "success");</script>';
                    
                    $_SESSION["ini_ses"]=$email;
                    header("location: dashboard.php");                 
                }
                
                
            } 
        }  
    }else{
        echo '<script>swal("Campos vacios", "Por favor llena todos los campos para iniciar sesion.", "error");</script>';
        header("Location:ini_ses.php");
    }
}
?>