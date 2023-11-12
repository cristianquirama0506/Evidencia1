<?php
include('../../conexion.php');
$miconexion = new ConexionMysql();
$miconexion->CrearConexion();

$Codigo = $_POST['Codigo'];
$Titulo = $_POST['Titulo'];
$ISBN = $_POST['ISBN'];
$Editorial = $_POST['Editorial'];
$Paginas = $_POST['Paginas'];

// Insertar
if (@$_POST['btnRegistrar']) {
    $sql = "INSERT INTO libro (codigo, titulo, ISBN, editorial, paginas) VALUES ('$Codigo', '$Titulo', '$ISBN', '$Editorial', '$Paginas')";
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
if (@$_POST['btnConsultar']) {
    $sql = "SELECT codigo, titulo, ISBN, editorial, paginas FROM libro WHERE codigo = '$Codigo'";
    $result = $miconexion->EjecutarSQL($sql);

    if ($result) {
        while ($row = $miconexion->ObtenerFilas($result)) {
            header("location: index.php?Codigo=" . $row[0] . "&Titulo=" . $row[1] . "&ISBN=" . $row[2] . "&Editorial=" . $row[3] . "&Paginas=" . $row[4]);
        }
    } else {
        echo "Error, Libro no existe.";
    }
}

// Eliminar
if (@$_POST['btnEliminar']) {
    $sql = "DELETE FROM libro WHERE codigo = '$Codigo'";
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
if (@$_POST['btnActualizar']) {
    $sql = "UPDATE libro SET titulo = '$Titulo', ISBN = '$ISBN', editorial = '$Editorial', paginas = '$Paginas' WHERE codigo = '$Codigo'";
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
