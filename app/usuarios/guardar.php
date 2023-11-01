<?php
    require '../config/database.php';

    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellido = $conn->real_escape_string($_POST['apellido']);
    $celular = $conn->real_escape_string($_POST['celular']); 
    $correo = $conn->real_escape_string($_POST['correo']);
    $edad = $conn->real_escape_string($_POST['edad']);
    $fechaNacimiento = $conn->real_escape_string($_POST['fechadenacimiento']);
    $fechaNacimientoFormatted = date('Y-m-d', strtotime($fechaNacimiento));
    $direccion = $conn->real_escape_string($_POST['direccion']);

    $sql = "INSERT INTO usuarios (nombre, apellido, celular, email, edad, fecha_nacimiento, direccion) 
    VALUES ('$nombre', '$apellido', '$celular', '$correo', $edad,'$fechaNacimientoFormatted', '$direccion')";
    if ($conn->query($sql)){
        $id = $conn->insert_id;
    }

    header('Location: index.php')
?>