<?php
    include('db/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio | #EstamosContigo</title>
    <?php include('includes/head.php') ?>
</head>
<body>
    <?php include('includes/nav.php') ?>
    <div class="container"><br>
    <div id="ini_ses" class="card-panel blue-grey lighten-5">
        <blockquote><h2>Inicia sesión</h2></blockquote>
        <form action="ini_ses.php" method="post">
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <input id="email" type="text" class="validate">
                    <label for="email">Correo</label>
                </div>
                <div class="input-field col s12 m12 l12">
                    <input id="pass" type="text" class="validate">
                    <label for="pass">Contraseña</label>
                </div>
                <p><b>Nota: </b> la contraseña le fue asignada el día que fue aprovado en la plataforma. <br>
                En caso de haber olvidado la contraseña contactese con el administrador.</p><br>
                <center>
                    <a class="modal-action modal-close btn red">Cancelar<i class="material-icons right">cancel</i></a>
                    <button class="btn green" type="submit" name="ini_ses">
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

        $sql = "INSERT INTO especialista (nombres,apellido_p,apellido_m,email,profesion,exp_anios,area,descr)VALUES('$nombres','$apellido_p','$apellido_m','$email','$profesion','$exp_anios','$area','$descr')";
        $result = mysqli_query($conexion, $sql);	
        echo '<script>swal("Datos enviados", "Los datos se han enviado con exito, evaluaremos su perfil y nos contectaremos contigo lo mas pronto posible.", "success");</script>';
        header('location: registro_esp.php');
    }else{
        echo '<script>swal("Campos vacios", "Por favor llena todos los campos para enviar tu perfil.", "error");</script>';
        header('location: index.php');
    }
}
?>