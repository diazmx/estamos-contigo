<?php
    session_start();
    echo $_SESSION["ini_ses"];
   /* include('session.php');
    if(!$_SESSION['ini_ses']){ 
        echo '<script> alert("Se requiere inicio de sesion para acceder a este apartado");</script>';
        echo $_SESSION['ini_ses'];
        //echo '<script> window.location="index.php";</script>';
    }
    */
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
        <blockquote><h3>Bienvenido </h3></blockquote>
        Hola, aqui tienes la lista de los usuarios que te hemos asignado.
             <table class="responsive-table striped centered">
        <thead>
          <tr>
              <th>Alias</th>
              <th>Estado</th>
          </tr>
        </thead>

        <tbody>
<?php
    require ('db/conexion.php');

    $query = mysqli_query($conexion, "SELECT * FROM paciente WHERE id_especilista=1"); //cambiar por id sesion
    while($row = mysqli_fetch_array($query)){
    echo 
        '<tr>
            <td>' .$row['alias'].'</td>
            <td>'. $row['estado_sitacion'].'</td>
            <td>'. $row['email'].'</td>
            <td><a class="btn" onclick="();" href="vermas.php?id='.$row['id'].'">Ver mas</a></td>
        </tr>';        
    }
?>

        </tbody>
      </table>
    </div>
      
    <?php include('includes/footer.php') ?>
    <?php include('includes/script.php') ?>
</body>
</html>