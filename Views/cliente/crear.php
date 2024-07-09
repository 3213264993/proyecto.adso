<?php
class profesorescontallers{};
$profesorescontallers = new profesorescontallers();
if(isset($_POST["crear"])){
    echo "Se creó el cliente con éxito.";

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];

  $clienteController->crear($id, $nombre, $apellido, $correo, $telefono);      

}
?>
<h3 class="center-align">Crear Nuevo Cliente</h3>
<div class="row">
    <form class="col s12" method="post">
        <div class="row card-panel teal lighten-5">
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="id" name="id" type="text" class="validate" required>
                    <label for="id">ID</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">person</i>
                    <input id="nombre" name="nombre" type="text" class="validate" required>
                    <label for="nombre">Nombre</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">person_outline</i>
                    <input id="apellido" name="apellido" type="text" class="validate" required>
                    <label for="apellido">Apellido</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">email</i>
                    <input id="correo" name="correo" type="email" class="validate" required>
                    <label for="correo">Correo del Usuario</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">phone</i>
                    <input id="telefono" name="telefono" type="text" class="validate" required>
                    <label for="telefono">Teléfono del Cliente</label>
                </div>
                <div class="input-field col s12 m6">
                    <button class="btn waves-effect waves-light green" type="submit" name="crear">
                        <i class="material-icons left">check</i>Crear
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Materialize CSS and JS -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
