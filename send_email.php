<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];

    $to = "tu_correo@dominio.com"; // Aquí va tu correo
    $subject = "Nuevo mensaje del formulario de contacto";
    $message = "Nombres: $nombres\nApellidos: $apellidos\nEdad: $edad\nCorreo: $correo\nCelular: $celular";
    $headers = "From: fleonr3@upao.edu.pe";

    if(mail($to, $subject, $message, $headers)){
        echo "Formulario enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el formulario.";
    }
}
?>
