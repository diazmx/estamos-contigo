<?php   
if(isset($_POST['send_esp'])){ 
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
        echo '<script>swal("Campos vacios", "Por favor llena todos los campos para poder enviar tu perfil.", "error");</script>'; 
    }
}
?>