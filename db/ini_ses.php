<?php
    session_start();
    include("conexion.php");

    $email = $_POST['noCuenta1'];
    $pass = $_POST['password1_input'];

    $query = mysqli_query($conexion,"SELECT * FROM usuario WHERE no_cuenta = '".$email."'");
=
    if (mysqli_num_rows($query) == 1){  //   Comprobar si está registrado en la table de "usuario"
        $row = mysqli_fetch_array($query);
        if($pass == $row['password']){  //  Comprobamos que la contraseña sea correcta
        $_SESSION['no_cuenta'] = $email;

        }
    }else{  //  Validamos si es registro
        if (mysqli_num_rows($query) == 0){  //  Validamos si ya esta registrado antes en "usuario"
            $query = mysqli_query($conexion,"SELECT * FROM info_user WHERE no_cuenta = '".$noCuenta1."'");
            if(mysqli_num_rows($query) == 1){   //  Verificamos si el numero de cuenta existe en info_user
                if($noCuenta1 == $noCuenta2){    //  Comprobamos que sean iguales los numeros de cuenta
                    if($pass1 == $pass2){   //  Comprobamos que sean iguales las contraseñas
                        mysqli_query($conexion, "INSERT INTO usuario (id,no_cuenta, tipo_user, password) VALUES('','$noCuenta1', 4, '$pass1')"); // registrado en usuarios. 
                        $_SESSION['no_cuenta'] = $noCuenta1;
                        header('location: ../main.php');
                    }else{
                        $_SESSION['log1'] = 6; //las contraseñas no coinciden
                        header('location: ../index.php');
                    }
                }else{     //  Contraselña no coinciden
                    $_SESSION['log1'] = 5; //los numeros de cuenta no coinciden
                    header('location: ../index.php');
                }
            }else{ // No esta en la tabla info_user
                $_SESSION['log1'] = 4; //numero de cuenta no valido
                header('location: ../index.php'); 
            }
        }else{
            $_SESSION['log1'] = 3; //numero ya registrado
            header('location: ../index.php');
        }
    }
?>