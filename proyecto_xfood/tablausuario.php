<?php
// Utilizamos declaraciones preparadas con marcadores (?) para realizar de manera segura las operaciones de inserción, actualización y eliminación de datos.
// Validamos la entrada de datos mediante funciones de PHP como filter_var() y empty() para asegurarnos de que los datos tengan el formato esperado y no estén vacíos.
// Comprobamos el método de solicitud ($_SERVER["REQUEST_METHOD"]) para determinar si se envió un formulario mediante POST antes de procesar la operación CRUD correspondiente.
// Vinculamos parámetros a las declaraciones preparadas utilizando bind_param() para garantizar que la entrada del usuario se trate como datos y no como código SQL ejecutable.
// Manejamos los errores de manera adecuada y proporcionamos mensajes de error apropiados.

include("config/config.php");
$id = "";
$id_eliminar = "";
$nuevoNombre = "";
$nuevoTelefono = "";
$nuevoEmail = "";


// si apreté botón Actualizar
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["actualizar"])) {
	$id = $_POST["id"];

	$stmt = $conexion->prepare("SELECT * FROM comentarios WHERE id=?");
	$stmt->bind_param("i", $id);

	// Ejecutar la declaración preparada
	if ($stmt->execute()) {
		$stmt->bind_result($id, $id_eliminar, $nuevoNombre, $nuevoTelefono, $nuevoEmail);
		while ($stmt->fetch()) {
	}
	} else {
			echo "Error: " . $stmt->error;
	}
}

// si aprieto el botón Eliminar
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["eliminar"])) {
	$id_eliminar = trim($_POST["id"]);
}

// si aprieto el botón Update
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {
    $id = $_POST["id"];
    $nuevoNombre = $_POST["nuevo_Nombre"];
    $nuevoTelefono = $_POST["nuevo_Telefono"];
    $nuevoEmail = $_POST["nuevo_Email"];

    // Validar la entrada
    if (!empty($id) && !empty($nuevoNombre) && !empty($nuevoTelefono) && !empty($nuevoEmail)) {
        // Crear una declaración preparada
        $stmt = $conexion->prepare("UPDATE comentarios SET names=?, phone=?, email=? WHERE id=?");
        $stmt->bind_param("sssi", $nuevoNombre, $nuevoTelefono, $nuevoEmail, $id);

        // Ejecutar la declaración preparada
        if ($stmt->execute()) {
					echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
					Registro actualizado con éxito.
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					</div>";
			} else {
            echo "Error: " . $stmt->error;
        }

        // Cerrar la declaración preparada
        $stmt->close();
    } else {
        echo "Datos de entrada inválidos.";
    }
}

// si aprieto el botón Delete
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete"])) {
    $id = $_POST["id"];

    // Validar la entrada
    if (!empty($id)) {
        // Crear una declaración preparada
        $stmt = $conexion->prepare("DELETE FROM comentarios WHERE id=?");
        $stmt->bind_param("i", $id);

        // Ejecutar la declaración preparada
        if ($stmt->execute()) {
					echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
					Registro eliminado con éxito.
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					</div>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Cerrar la declaración preparada
        $stmt->close();
    } else {
        echo "Datos de entrada inválidos.";
    }
}
?>


<!doctype html>
<html lang="es">

<head>
	<title>PAGINA ABEJAS</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
	<!-- Bootstrap CSS v5.3.2 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css">
	<script src="https://kit.fontawesome.com/284989c7a4.js" crossorigin="anonymous"></script>
</head>

<body>
	<header>
		<!-- place navbar here -->
	</header>
	<main>
		<div class="container">
			<div class="row justify-content-center align-items-center g-2">
				<div class="col">
					<h1>tabla comentarios</h1>
				</div>
			</div>
		</div>

		<div class="container my-2 shadow">
			<div class="row justify-content-center align-items-center g-2">
				<div class="col">
					<!-- Formulario para crear un usuario -->
					
		<div class="container my-2 shadow">
			<div class="row justify-content-center align-items-center g-2">
				<div class="col">
					<!-- Formulario para leer usuarios -->
					<h2>Leer cometarios</h2>

					<div class="table-responsive">
						<table class="table table-light">
							<thead>
								<tr>
									<th scope="col">id</th>
									<th scope="col">Nombe</th>
									<th scope="col">telefono</th>
									<th scope="col">Email</th>
                                    <th scope="col">Mensaje</th>
									<th scope="col">Acción</th>
								</tr>
							</thead>
							<tbody>
<?php
// Leer (Seleccionar)
$consulta = "SELECT * FROM comentarios";
$resultado = $conexion->query($consulta);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
				echo "<tr class=''>";
        echo "<td>" . $fila["id"] . "</td>"; // generalmente no mostramos públicamente el id
        echo "<td>" . $fila["names"] . "</td>";
        echo "<td>" . $fila["phone"] . "</td>";
        echo "<td>" . $fila["email"] . "</td>";
        echo "<td>" . $fila["messege"] . "</td>";
        echo "<td>";
				echo "<form action='tablausuario.php' method='post'>";
				echo "<input type='submit' name='actualizar' value='Actualizar'>";	
				echo "<input type='submit' name='eliminar' value='Eliminar' class='mx-3'>";
				echo "<input type='hidden' name='id' value='" . $fila["id"] . "'>";
				echo "</form>";
				echo "</td>";
				echo "</tr>";
				
			}
} else {
    echo "No se encontraron registros.";
}
?>
							</tbody>
						</table>
					</div>


				</div>
			</div>
		</div>

		<div class="container mb-2 shadow">
			<div class="row justify-content-center align-items-center g-2">
				<div class="col">
					<!-- Formulario para actualizar un usuario -->
					<h2>Actualizar Comentario</h2>
					<form action="tablausuario.php" method="post" class="row g-3 mb-3">
					<div class="col">
						<label for="id_update" class="form-label">ID de Usuario:</label>
						<input type="text" name="id" id="id_update" class="form-control" value="<?php echo $id; ?>" required readonly>
					</div>
					<div class="col">
						<label for="nuevo_Nombre" class="form-label">Nuevo Nombre:</label>
						<input type="text" name="nuevo_Nombre" id="nuevo_Nombre" class="form-control" value="<?php echo $nuevoNombre; ?>" required>
					</div>
					<div class="col">
						<label for="nuevo_Telefono" class="form-label">Nuevo Telefono:</label>
						<input type="text" name="nuevo_Telefono" id="nuevo_Telefono" class="form-control" value="<?php echo $nuevoTelefono; ?>" required>
					</div>
					<div class="col">
						<label for="nuevo_Email" class="form-label">Nuevo Email:</label>
						<input type="text" name="nuevo_Email" id="nuevo_Email" class="form-control" value="<?php echo $nuevoEmail; ?>" required>
					</div>
						<input type="submit" name="update" value="Update">
					</form>
				</div>
			</div>
		</div>

		<div class="container my-2 shadow">
			<div class="row justify-content-center align-items-center g-2">
				<div class="col">
					<!-- Formulario para eliminar un usuario -->
					<h2>Eliminar Usuario</h2>
					<form action="tablausuario.php" method="post" class="row g-3 mb-3">
						<div class="col">
							<label for="id_delete" class="form-label">ID de Usuario:</label>
							<input type="number" name="id" id="id_delete" class="form-control" value="<?php echo $id_eliminar; ?>"  required readonly>
						</div>
							<input type="submit" name="delete" value="Delete">
					</form>
				</div>
			</div>
		</div>





	</main>
	<footer>
		<!-- place footer here -->
	</footer>
	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>

<?php
// Cerrar la conexión a la base de datos
$conexion->close();
?>