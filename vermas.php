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
    <!-- <?php include('includes/nav.php') ?> -->
    <nav>
        <div class="nav-wrapper red lighten-4"></div>
    </nav>

    <div class="container">
    
<?php
    require ('db/conexion.php');
    
    $id_paciente = $_GET['id'];    
    $query1 = mysqli_query($conexion, "SELECT * FROM paciente WHERE id= ".$id_paciente);
    while($row = mysqli_fetch_array($query1)){
?>
    <br>
    <div class="card-panel blue-grey lighten-5" id="no_edit" style="display:block">
       <blockquote><h2>Datos generales:</h2></blockquote>
        <b>Alias:</b> <?php echo $row['alias'];?> <br>
        <b>Nombre completo: </b><?php echo $row['nombres'] . $row['apellido_p'] . $row['apellido_m'];?> 
        <b>Edad: </b> <?php echo $row['edad'];?> <br>
        <b>Telefono: </b> <?php echo $row['tel'];?> <br>  
        <b>Cuadro: </b><?php echo $row['cuadro'];?> <br>    
        <b>Padecimiento: </b> <?php echo $row['estado_salud'];?> <br>  
        <b>Estado: </b> <?php echo $row['estado_sitacion'];?> <br>
        <b>Fecha de registro: </b> <?php echo $row['create_at'];?> <br>
        <b>Ultima actualización: </b> <?php echo $row['update_at'];?> <br><br>
        <center>
            <button class="btn">Editar datos</button>
            <button class="btn  blue">Actualizar estado</button>
        </center>
        <blockquote><h2>Historial: </h2></blockquote>
        <table class="responsive-table centered">
        <thead>
          <tr>
              <th>Fecha</th>
              <th>Descripción</th>
          </tr>
        </thead>

        <tbody>
<?php
    }

    $query2 = mysqli_query($conexion, "SELECT * FROM cambios WHERE id_paciente= ".$id_paciente);
    while($row = mysqli_fetch_array($query2)){
?>
        <tr>
            <td> <?php echo $row['create_at'];?> </td>
            <td> <?php echo $row['descr'];?> </td>
        </tr>        
<?php
    }
?>

        </tbody>
      </table>
    </div>
    </div>
      
    <?php include('includes/footer.php') ?>
    <?php include('includes/script.php') ?>
</body>
</html>