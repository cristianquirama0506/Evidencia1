<?php
include('../../conexion.php');
$miconexion = new ConexionMysql();
$miconexion->CrearConexion();

$usuarioCodigo = $_POST['UsuarioCodigo'];
$ejemplarCodigo = $_POST['EjemplarCodigo'];
$fechaPrestamo = $_POST['FechaPrestamo'];
$fechaDevolucion = $_POST['FechaDevolucion'];

// Insertar
if (isset($_POST['btnRegistrar'])) {
    $sql = "INSERT INTO prestamo (usuario_codigo, ejemplar_codigo, fecha_prestamo, fecha_devolucion) VALUES ('$usuarioCodigo', '$ejemplarCodigo', '$fechaPrestamo', '$fechaDevolucion')";
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
    $sql = "SELECT usuario_codigo, ejemplar_codigo, fecha_prestamo, fecha_devolucion FROM prestamo WHERE usuario_codigo = '$usuarioCodigo' AND ejemplar_codigo = '$ejemplarCodigo'";
    $result = $miconexion->EjecutarSQL($sql);

    if ($result) {
        while ($row = $miconexion->ObtenerFilas($result)) {
            header("location: index.php?UsuarioCodigo=" . $row[0] . "&EjemplarCodigo=" . $row[1] . "&FechaPrestamo=" . $row[2] . "&FechaDevolucion=" . $row[3]);
        }
    } else {
        echo "Error, Prestamo no existe.";
    }
}

// Eliminar
if (isset($_POST['btnEliminar'])) {
    $sql = "DELETE FROM prestamo WHERE usuario_codigo = '$usuarioCodigo' AND ejemplar_codigo = '$ejemplarCodigo'";
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
    $sql = "UPDATE prestamo SET fecha_prestamo = '$fechaPrestamo', fecha_devolucion = '$fechaDevolucion' WHERE usuario_codigo = '$usuarioCodigo' AND ejemplar_codigo = '$ejemplarCodigo'";
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
