<?php
require_once("./Config/ConectorBd.php");

class profesores {

    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $conectarse;


    public function __construct() {
        $this->conectarse = new ConectorBd();
    }

    // Getters y Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getConectarse() {
        return $this->conectarse;
    }

    public function setConectarse($conectarse) {
        $this->conectarse = $conectarse;
    }

    // Listar todos los datos
    public function listAll() {
        $cadenaSql = "SELECT * FROM profesores";
        $resultado = $this->conectarse->consultasconretorno($cadenaSql);
        if ($resultado) {
            return $resultado->fetch_all(MYSQLI_ASSOC);
        } else {
            // Manejo de errores
            return [];
        }
    }

    // Crear
    public function create() {
        $cadenaSql = "INSERT INTO profesores (id, nombre, apellido, correo, telefono) 
                      VALUES ('$this->id', '$this->nombre', '$this->apellido', '$this->correo', '$this->telefono')";
        $this->conectarse->consultaSinRetorno($cadenaSql);
    }

    // Eliminar
    public function delete($id) {
        $cadenaSql = "DELETE FROM profesores WHERE id='$id'";
        $this->conectarse->consultaSinRetorno($cadenaSql);
    }

    // Editar
    public function update() {
        $cadenaSql = "UPDATE profesores SET 
                      nombre='$this->nombre', 
                      apellido='$this->apellido', 
                      correo='$this->correo', 
                      telefono='$this->telefono' 
                      WHERE id='$this->id'";
        $this->conectarse->consultaSinRetorno($cadenaSql);
    }
}
