<?php
    require '../config/database.php';

    $id = $conn->real_escape_string($_POST['id']);
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellido = $conn->real_escape_string($_POST['apellido']);
    $celular = $conn->real_escape_string($_POST['celular']); 
    $correo = $conn->real_escape_string($_POST['correo']);
    $edad = $conn->real_escape_string($_POST['edad']);
    $fechaNacimiento = $conn->real_escape_string($_POST['fechadenacimiento']);
    $fechaNacimientoFormatted = date('Y-m-d', strtotime($fechaNacimiento));
    $direccion = $conn->real_escape_string($_POST['direccion']);

    $sql = "UPDATE usuarios 
    SET nombre = '$nombre', apellido = '$apellido', celular = $celular, email = '$correo', edad = $edad, fecha_nacimiento = '$fechaNacimientoFormatted', direccion = '$direccion' 
    WHERE id=$id";

    if ($conn->query($sql)){
    }

    header('Location: index.php')
?>