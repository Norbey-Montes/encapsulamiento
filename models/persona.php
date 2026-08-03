<?php
class Persona {
    private $nombre;
    private $apellidos;
    private $edad;
    private $correo;

    public function __construct($nombre, $apellidos, $edad, $correo) {
        $this->setNombre($nombre);
        $this->setApellidos($apellidos);
        $this->setEdad($edad);
        $this->setCorreo($correo);
    }

    // Getters
    public function getNombre() { return $this->nombre; }
    public function getApellidos() { return $this->apellidos; }
    public function getEdad() { return $this->edad; }
    public function getCorreo() { return $this->correo; }

    // Setters con validación
    public function setNombre($nombre) {
        if (is_string($nombre) && trim($nombre) !== "") {
            $this->nombre = $nombre;
        }
    }

    public function setApellidos($apellidos) {
        if (is_string($apellidos) && trim($apellidos) !== "" && !preg_match('/[0-9]/', $apellidos)) {
            $this->apellidos = $apellidos;
        }
    }

    public function setEdad($edad) {
        if (is_numeric($edad) && $edad >= 0 && $edad <= 120) {
            $this->edad = $edad;
        }
    }

    public function setCorreo($correo) {
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $this->correo = $correo;
        }
    }

    public function saludar() {
        return "Hola, me llamo {$this->nombre} {$this->apellidos}, tengo {$this->edad} años y mi correo es {$this->correo}.";
    }
}
?>

<!-- 
// class Persona {
//     public $nombre;
//     public $apellidos;
//     public $edad;
//     public $correo;

//     // Método Constructor para inicializar los atributos al crear el objeto
//     public function __construct($nombre, $apellidos, $edad, $correo) {
//         $this->nombre = $nombre;
//         $this->apellidos = $apellidos;
//         $this->edad = $edad;
//         $this->correo = $correo;
//     }

//     public function saludar() {
//         return "Hola, me llamo $this->nombre $this->apellidos, tengo $this->edad años y mi correo es $this->correo.";
//     }
// } -->