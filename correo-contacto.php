<?php
    $destino= "info@gbconstrucciones.com.ar";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["messaje"];
    $contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje . "\nDesea Info sobre tus servicios ";
    mail($destino, "Nueva consulta desde Sitio Web", $contenido);
    header("Location:index.html");
?>