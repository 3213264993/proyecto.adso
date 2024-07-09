<?php
require_once("./controlllers/profesorescontallers.php");
$profesoresController = new profesorescontallers();
$listadoClientes = $profesorescontallers->listar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <main class="container">
        <h3>Listado de clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($listadoClientes)): ?>
                    <?php foreach ($listadoClientes as $cliente): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($cliente['id']); ?></td>
                        <td><?php echo htmlspecialchars($cliente['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($cliente['apellido']); ?></td>
                        <td><?php echo htmlspecialchars($cliente['correo']); ?></td>
                        <td><?php echo htmlspecialchars($cliente['telefono']); ?></td>
                        <td>
                            <a href="?vista=cliente/ver&id=<?php echo $cliente['id']; ?>" class="btn-floating blue btn-small"><i class="material-icons">visibility</i></a>
                            <a href="?vista=cliente/editar&id=<?php echo $cliente['id']; ?>" class="btn-floating orange btn-small"><i class="material-icons">edit</i></a>
                            <a href="?vista=cliente/eliminar&id=<?php echo $cliente['id']; ?>" class="btn-floating red btn-small"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="center-align">No hay clientes disponibles.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </main>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
