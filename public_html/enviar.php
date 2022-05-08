 <?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$para = "info@asociacionoasis.org.ar";
$asunto = "Contacto OASIS";

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " " . $apellido . " \r\n";
$mensaje .= "e-Mail: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

mail($para, $asunto, utf8_decode($mensaje), $header);

echo "<script language='javascript'>window.location='index.html'</script>"; 
?>


