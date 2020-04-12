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
    <div class="card-panel blue-grey lighten-5">
        <div class="row">
            <form class="col s12" name="send_esp" action="registro_esp.php" method="post">
                <div id="paso1">
                    <blockquote><h3>¿Te gustaría ser parte de <b>#EstamosContigo</b>?</h3></blockquote>
                    <p>Para unirte a nuestra red de especialistas, llena el siguiente formulario, nosotros nos podemos en contacto contigo una vez que tu perfil sea evaluado.<br>
                    <b>Nota: </b> este formulario no garatiza la aprobación de tu perfil, nos podremos en contacto contigo en el correo que nos proporcionas.</p>
                    <h5><b>Datos personales:</b></h5>
                    <div class="row">
                        <div class="input-field col s12 m12 l4">
                            <input id="nombres" type="text" class="validate" required>
                            <label for="nombres">Nombres</label>
                        </div>
                        <div class="input-field col s12 m12 l4">
                            <input id="apellido_p" type="text" class="validate" required>
                            <label for="apellido_p">Apellido paterno</label>
                        </div>
                        <div class="input-field col s12 m12 l4">
                            <input id="apellido_m" type="text" class="validate" required>
                            <label for="apellido_m">Apellido Materno</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" required>
                            <label for="email">Email</label>
                        </div>
                        
                        <center>
                            <a href="index.php" class="btn red">Cancelar<i class="material-icons right">cancel</i></a>
                            <a class="btn green" OnClick="gotopaso2()">Siguiente<i class="material-icons right">arrow_forward</i></a>
                        </center>    
                    </div>
                </div>
                    <div id="paso2" style="display:none">
                    <blockquote><h4><b>Datos profesionales:</b></h4></blockquote>
                    <p>Te queremos conocer un poco mas ¿puedes regalarnos unos datos de tu trayectoria profesional?</p>
                    <div class="row">
                        <div class="input-field col s12 m12 l8">
                            <input id="profesion" type="text" class="validate" required>
                            <label for="profesion">Profesion</label>
                        </div>
                        <div class="input-field col s12 m12 l4">
                            <input id="exp_anios" type="text" class="validate" required>
                            <label for="exp_anios">Años de experiencia</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="area" type="text" class="validate" required>
                            <label for="area">Area de especialidad</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea placeholder="¿Que te motiva a ayudar las personas en esta situacion?" id="descr" class="materialize-textarea"></textarea>
                        </div>
                    </div>
                    <center>
                        <a class="btn grey" OnClick="backtopaso1()">Regresar<i class="material-icons left">arrow_back</i></a>
                        <a href="index.php" class="btn red">Cancelar<i class="material-icons right">cancel</i></a>
                        <button class="btn green" type="submit" name="guardar">
                            Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </center>                    
                </div>
            </form>
        </div>
    </div>
    </div><br>
    <?php include('includes/footer.php') ?>
    <?php include('includes/script.php') ?>
</body>
</html>

<?php
if(isset($_POST['guardar'])){ 
    if($_POST['nombres'] != "" && $_POST['apellido_p'] != "" && $_POST['apellido_m'] != "" && $_POST['email'] != "" && $_POST['profesion'] != "" && $_POST['exp_anios'] != "" && $_POST['area'] != ""  && $_POST['descr'] != ""){

        $nombres = $_POST['nombres'];
        $apellido_p = $_POST['apellido_p'];
        $apellido_m = $_POST['apellido_m'];
        $email = $_POST['email'];
        $profesion = $_POST['profesion'];
        $exp_anios = $_POST['exp_anios'];
        $area = $_POST['area'];
        $descr = $_POST['descr'];

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