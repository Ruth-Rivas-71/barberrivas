<script>
   // Conectar a la base de datos
$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

// Guardar los datos
$nombre = $_POST['nombre']; 
    $tipo_de_corte = $_POST['corte'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

$query = "INSERT INTO citas VALUES('$nombre', '$fecha', '$hora')";
mysqli_query($conexion, $query);
    // Datos del correo
$destinatario = 'ruthberenicerivasvilla@gmail.com';
$asunto = 'Nueva cita reservada'; 

// Mensaje
$mensaje = "Se ha reservado una nueva cita con los siguientes datos:\n";
$mensaje .= "Nombre: $nombre\n";
    $mensaje .= "Tipo de corte: $corte\n";
$mensaje .= "Fecha: $fecha\n"; 
$mensaje .= "Hora: $hora";

// Enviar correo
mail($destinatario, $asunto, $mensaje);
  </script>