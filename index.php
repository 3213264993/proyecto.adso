<?php
require_once("./Config/ConectorBd.php");
require_once("./controlllers/profesorescontallers.php")
?>
<?php
require_once("../CONEXION_BSD/Config/Enrutador.php");
require_once("../CONEXION_BSD/controlllers/profesorescontallers.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <main class="container">
    <a href="http://localhost/CONEXION_BSD/Views/cliente/crear.php"><i class="material-icons small blue-text">add</i>
     <a href="editar.php?id=<?php echo $profesor['id']; ?>" class="green-text"><i class="material-icons">edit</i></a>
    <a href="eliminar.php?id=<?php echo $profesor['id']; ?>" class="red-text"><i class="material-icons">delete</i>

            
        
          
    </main>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>




