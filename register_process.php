<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$telef = $_POST['telef'];
$mail = $_POST['mail'];
$usuario = $_POST['usuario'];
$passw = $_POST['passw'];
$text_area = $_POST['text_area'];
$genero = $_POST['genero'];
$estado_civil = $_POST['estado_civil'];
$experiencia = $_POST['experiencia'];
$leng_fav = $_POST['leng_fav'];
$estudiante = isset($_POST['estudiante']) ? 1 : 0;
$trabajo = isset($_POST['trabajo']) ? 1 : 0;


$errores = [];

if (!preg_match("/^[a-zA-Z ]{2,30}$/", $nombre)) {
    $errores[] = "El nombre debe tener entre 2 y 30 caracteres.";
}

if (!preg_match("/^[a-zA-Z ]{2,50}$/", $apellidos)) {
    $errores[] = "Los apellidos deben tener entre 2 y 50 caracteres.";
}

if (!filter_var($edad, FILTER_VALIDATE_INT) || $edad < 18 || $edad > 100) {
    $errores[] = "La edad debe ser un número entre 18 y 100.";
}

if (!preg_match("/^\+[0-9 ]{7,15}$/", $telef)) {
    $errores[] = "El teléfono debe tener entre 7 y 15 dígitos.";
}

if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El correo electrónico no es válido.";
}

if (!preg_match("/^[a-z0-9]{4,20}$/", $usuario)) {
    $errores[] = "El usuario debe tener entre 4 y 20 caracteres, solo minúsculas y números.";
}

if (strlen($passw) < 6 || strlen($passw) > 20) {
    $errores[] = "La contraseña debe tener entre 6 y 20 caracteres.";
}

if (!in_array($genero, ['masculino', 'femenino', 'otro'])) {
    $errores[] = "El género no es válido.";
}

if (!in_array($estado_civil, ['soltero', 'casado', 'divorciado', 'viudo'])) {
    $errores[] = "El estado civil no es válido.";
}

if (!in_array($experiencia, ['si', 'no'])) {
    $errores[] = "La opción de experiencia no es válida.";
}

if (!in_array($leng_fav, ['php', 'js'])) {
    $errores[] = "La opción de lenguaje favorito no es válida.";
}

if (count($errores) > 0) {
    foreach ($errores as $error) {
        echo "<p>$error</p>";
    }
} else {
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "form";
 
     $conn = new mysqli($servername, $username, $password, $dbname);
 
     $stmt = $conn->prepare("INSERT INTO formdatos (nombre, apellidos, edad, telef, mail, user, passw, text_area, genero, estado_civil, experiencia, leng_fav, estudiante, trabajo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssisssssssssii", $nombre, $apellidos, $edad, $telef, $mail, $usuario, $passw, $text_area, $genero, $estado_civil, $experiencia, $leng_fav, $estudiante, $trabajo);
 
     if ($stmt->execute()) {
         echo "<p>Registro completado con éxito.</p>";
     }
 
     $stmt->close();
     $conn->close();
}
?>
