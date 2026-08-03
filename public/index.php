<?php
// // Incluimos la clase
// include 'persona.php';

// // 1. Creamos los 3 objetos usando el constructor
// $persona1 = new Persona("Chapinera", "Martinez", 22, "chapinera@email.com");
// $persona2 = new Persona("Carlos", "Pérez", 25, "carlos@email.com");
// $persona3 = new Persona("Ana", "Gómez", 23, "ana@email.com");

// // 2. Modificamos información libremente de cada objeto 
// $persona1->nombre = "María";
// $persona1->apellidos = "Rodríguez";
// $persona2->correo = "carlos.nuevo@email.com";
// $persona3->edad = 28;

// // 3. Intentamos asignar información incorrecta (Punto 3 de la guía)
// $persona1->edad = -5;                   
// $persona2->edad = 150;                  
// $persona3->nombre = "";                 
// $persona1->correo = "correo-sin-formato"; 
// $persona2->apellidos = "Perez123";  




// Incluimos la conexión y el modelo subiendo un nivel con ../
// include '../config/conexion.php';

require_once '../models/persona.php';

// Creación de las personas iniciales con tus datos
$persona1 = new Persona("Norbey", "Montes", 22, "norbey@email.com");
$persona2 = new Persona("Carlos", "Pérez", 25, "carlos@email.com");
$persona3 = new Persona("Ana", "Gómez", 23, "ana@email.com");
?>
<?php
require_once '../models/persona.php';

// 1. Creación de las personas iniciales con tus datos
$persona1 = new Persona("Norbey Steep", "Montes Ramírez", 22, "norbey@email.com");
$persona2 = new Persona("Carlos", "Pérez", 25, "carlos@email.com");
$persona3 = new Persona("Ana", "Gómez", 23, "ana@email.com");

// 2. Ejecutamos todas las pruebas de información incorrecta de un solo golpe aquí arriba
$persona1->setEdad(-5);
$persona2->setEdad(200);
$persona3->setNombre("   ");
$persona1->setCorreo("correo-sin-formato");
$persona2->setApellidos("Perez123");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Personas</title>
</head>
<body>

    <h2>Listado de Personas</h2>

    <h3>Información correcta</h3>

    <!-- PERSONA 1 -->
    <h4>Persona 1</h4>
    <p><strong>Nombre:</strong> <?php echo $persona1->getNombre(); ?></p>
    <p><strong>Apellidos:</strong> <?php echo $persona1->getApellidos(); ?></p>
    <p><strong>Edad:</strong> <?php echo $persona1->getEdad(); ?></p>
    <p><strong>Correo:</strong> <?php echo $persona1->getCorreo(); ?></p>
    <p><strong>Mensaje:</strong> <?php echo $persona1->saludar(); ?></p>
    <hr>

    <!-- PERSONA 2 -->
    <h4>Persona 2</h4>
    <p><strong>Nombre:</strong> <?php echo $persona2->getNombre(); ?></p>
    <p><strong>Apellidos:</strong> <?php echo $persona2->getApellidos(); ?></p>
    <p><strong>Edad:</strong> <?php echo $persona2->getEdad(); ?></p>
    <p><strong>Correo:</strong> <?php echo $persona2->getCorreo(); ?></p>
    <p><strong>Mensaje:</strong> <?php echo $persona2->saludar(); ?></p>
    <hr>

    <!-- PERSONA 3 -->
    <h4>Persona 3</h4>
    <p><strong>Nombre:</strong> <?php echo $persona3->getNombre(); ?></p>
    <p><strong>Apellidos:</strong> <?php echo $persona3->getApellidos(); ?></p>
    <p><strong>Edad:</strong> <?php echo $persona3->getEdad(); ?></p>
    <p><strong>Correo:</strong> <?php echo $persona3->getCorreo(); ?></p>
    <p><strong>Mensaje:</strong> <?php echo $persona3->saludar(); ?></p>
    <hr>


    <h3>Pruebas de información incorrecta</h3>

    <!-- PRUEBA 1 -->
    <h4>Prueba 1: Edad negativa</h4>
    <p>Edad -5 rechazada.</p>
    <p>Edad actual: <?php echo $persona1->getEdad(); ?></p>

    <!-- PRUEBA 2 -->
    <h4>Prueba 2: Edad mayor a 120</h4>
    <p>Edad 200 rechazada.</p>
    <p>Edad actual: <?php echo $persona2->getEdad(); ?></p>

    <!-- PRUEBA 3 -->
    <h4>Prueba 3: Nombre vacío</h4>
    <p>Nombre vacío rechazado.</p>
    <p>Nombre actual: <?php echo $persona3->getNombre(); ?></p>

    <!-- PRUEBA 4 -->
    <h4>Prueba 4: Correo incorrecto</h4>
    <p>Correo inválido rechazado.</p>
    <p>Correo actual: <?php echo $persona1->getCorreo(); ?></p>

    <!-- PRUEBA 5 -->
    <h4>Prueba 5: Apellidos con números</h4>
    <p>Apellido con números rechazado.</p>
    <p>Apellidos actuales: <?php echo $persona2->getApellidos(); ?></p>

</body>
</html>