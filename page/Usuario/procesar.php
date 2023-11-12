<?php
include('../../conexion.php');
$miconexion = new ConexionMysql();
$miconexion->CrearConexion();

$Codigo = $_POST['Codigo'];
$Nombre = $_POST['Nombre'];
$Telefono = $_POST['Telefono'];
$Direccion = $_POST['Direccion'];

// Insertar
if (isset($_POST['btnRegistrar'])) {
    $sql = "INSERT INTO usuario (codigo, nombre, telefono, direccion) VALUES ('$Codigo', '$Nombre', '$Telefono', '$Direccion')";
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
    $sql = "SELECT codigo, nombre, telefono, direccion FROM usuario WHERE codigo = '$Codigo'";
    $result = $miconexion->EjecutarSQL($sql);

    if ($result) {
        while ($row = $miconexion->ObtenerFilas($result)) {
            header("location: index.php?Codigo=" . $row[0] . "&Nombre=" . $row[1] . "&Telefono=" . $row[2] . "&Direccion=" . $row[3]);
        }
    } else {
        echo "Error, Usuario no existe.";
    }
}

// Eliminar
if (isset($_POST['btnEliminar'])) {
    $sql = "DELETE FROM usuario WHERE codigo = '$Codigo'";
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
    $sql = "UPDATE usuario SET nombre = '$Nombre', telefono = '$Telefono', direccion = '$Direccion' WHERE codigo = '$Codigo'";
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
