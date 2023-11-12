<?php
include('../../conexion.php');
$miconexion = new ConexionMysql();
$miconexion->CrearConexion();

$Codigo = $_POST['Codigo'];
$localizacion = $_POST['Localizacion'];

// Insertar
if (isset($_POST['btnRegistrar'])) {
    $sql = "INSERT INTO ejemplar (Codigo, Localizacion) VALUES ('$Codigo', '$localizacion')";
    $result = $miconexion->EjecutarSQL($sql);

    if ($result) {
        $numfila = $miconexion->ObtenerFilasAfectadas();
        if ($numfila > 0) {
            echo "Registro insertado en la base de datos.";
        } else {
            echo "Error al registrar. No se guardó en la base de datos.";
        }
    }
}

// Consultar
if (isset($_POST['btnConsultar'])) {
    $sql = "SELECT codigo, localizacion FROM ejemplar WHERE codigo = '$Codigo'";
    $result = $miconexion->EjecutarSQL($sql);

    if ($result) {
        while ($row = $miconexion->ObtenerFilas($result)) {
            header("location: index.php?Codigo=" . $row[0] . "&Localizacion=" . $row[1]);
        }
    } else {
        echo "Error, Ejemplar no existe.";
    }
}

// Eliminar
if (isset($_POST['btnEliminar'])) {
    $sql = "DELETE FROM ejemplar WHERE codigo = '$Codigo'";
    $result = $miconexion->EjecutarSQL($sql);

    if ($result) {
        $numfila = $miconexion->ObtenerFilasAfectadas();
        if ($numfila > 0) {
            echo "Eliminado Exitosamente";
        } else {
            echo "<h2>Error: No se encontró registro para eliminar.</h2>";
        }
    }
}

// Actualizar
if (isset($_POST['btnActualizar'])) {
    $sql = "UPDATE ejemplar SET localizacion = '$Localizacion' WHERE codigo = '$Codigo'";
    $result = $miconexion->EjecutarSQL($sql);

    if ($result) {
        if ($result > 0) {
            echo "Registro Actualizado";
        } else {
            echo "Error al actualizar, no se encontró registro.";
        }
    }
}
?>
