<?php
    include('db/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | #EstamosContigo</title>
    <?php include('includes/head.php') ?>
</head>
<body>
    <?php include('includes/nav.php') ?>
    <div class="container">
        <div class="row valign-wrapper">
            <div class="col s12 m5 l5 ">
                <blockquote><h1>Estamos para ayudarte...</h1></blockquote>
            </div>
            <div class="col s12 m7 l7 hide-on-med-and-down">
                <center><img class="responsive-img" style="width:100%" src="images/logo/logobw_large.png"></center>
            </div>
        </div>
        <center><img class="responsive-img hide-on-med-and-up" style="width:100%" src="images/logo/logobw_large.png"></center>
        <p align="justify">En la iniciativa <b>#EstamosContigo</b> queremos ofrecerte apoyo en estos tiempos de contingencia, de incertidumbre...<br><br>
        
        Día con día reclutamos especialistas que estan para brindarte una mano cuando mas lo necesitas. La <b>COVID-19</b> es una enfermedad infecciosa causada por un nuevo virus que no había sido detectado en humanos hasta la fecha, lo que nos ha hecho entrar en pandemia a nivel mundial. <br><br>
        
        Como medida preventiva a nivel nacional entramos en cuarentena desde el pasado mes de marzo y aun tenemos la insetidumbre de la fecha en la cual saldremos de esta, el salir de casa y tomar retomar nuestras actividades rutinarias aun no tiene fecha, ni horario concreto. <br><br>
        
        La cuarentena suele ser una experiencia desagradable para quienes la padecen: <u>separación de los seres queridos</u>, <u>pérdida de libertad</u>, <u>incertidumbre sobre el estado de la epidemia</u> y <u>aburrimiento</u>, son algunas de las consecuencias que, en ocasiones, pueden conllevar efectos dramáticos. <br><br>
        
        Casos de <u>violencia domestica (fisica, verbal, psicologica, etc.)</u>, <u>aislamiento</u>, <u>ansiedad</u>, <u>depresión</u>, <u>fobias</u>, entre otros, han destacado al incrementar su nivel de insidencia.
        
        Realizando un estudio en conjunto con especialistas en el tema, reunimos a los mejores especilistas en salud clinica, psicologos, psiquiatras, entre otras ramas, para ayudarte a superar estos tiempos de insertidumbre. <br><br>
        </p>
    </div>
      
    <?php include('includes/modals.php') ?>
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
    }else{
        echo '<script>swal("Campos vacios", "Por favor llena todos los campos para enviar tu perfil.", "error");</script>'; 
    }
}
?>