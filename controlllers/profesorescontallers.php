<?php
require_once("./models/clientes.php");  

class clientecontallers {
    // Atributos
    private $profesores;

    // Constructor
    public function __construct() {
        $this->profesores = new profesores();
    }

    // Métodos

    // Listar todos los profesores
    public function listar() {
        $listado = $this->profesores->listAll();
        return $listado;
    }

    // Crear un nuevo profesor
    public function crear($nombre, $apellido, $correo, $telefono) {
        $this->profesores->setNombre($nombre);
        $this->profesores->setApellido($apellido);
        $this->profesores->setCorreo($correo);
        $this->profesores->setTelefono($telefono);
        $this->profesores->create();
    }

    // Otros métodos como actualizar, eliminar, etc., pueden ser añadidos aquí
}

// Ejemplo de uso de la clase clientecontallers
$controlador = new clientecontallers();

// Listar profesores
$listadoClientes = $controlador->listar();

echo "<h3>Listado de Profesores</h3>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Correo</th><th>Teléfono</th></tr>";
foreach ($listadoClientes as $cliente) {
    echo "<tr>";
    echo "<td>{$cliente['id']}</td>";
    echo "<td>{$cliente['nombre']}</td>";
    echo "<td>{$cliente['apellido']}</td>";
    echo "<td>{$cliente['correo']}</td>";
    echo "<td>{$cliente['telefono']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
