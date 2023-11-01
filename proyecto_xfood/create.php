<?php
// Establecer una conexión a la base de datos
// $conexion = mysqli_connect("localhost", "usuario", "contraseña", "base_de_datos");
$conexion = mysqli_connect("localhost", "root", "", "abejas");

// Comprobar la conexión y devolver error
if (mysqli_connect_errno()) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

// Insertar datos en la tabla 'usuarios'

$names = "";
$email = "";
$phone = "";
$messege = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["create"])) {
	$names = $_POST["names"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
    $messege = $_POST["messege"];
}
$consulta = "INSERT INTO comentarios (names, email, phone, messege) VALUES ('$names', '$email', '$phone','$messege')";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>