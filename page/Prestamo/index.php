<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestamos</title>
    <!-- Agregar enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">Prestamos</h1>
  
        <form action="procesar.php" method="POST">
            <table class="table">
                <tr>
                    <td>Usuario Código:</td>
                    <td>
                        <input type="text" name="UsuarioCodigo" class="form-control" value="<?php echo isset($_GET['UsuarioCodigo']) ? htmlspecialchars($_GET['UsuarioCodigo']) : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Ejemplar Código:</td>
                    <td>
                        <input type="text" name="EjemplarCodigo" class="form-control" value="<?php echo isset($_GET['EjemplarCodigo']) ? htmlspecialchars($_GET['EjemplarCodigo']) : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Fecha Prestamo:</td>
                    <td>
                        <input type="text" name="FechaPrestamo" class="form-control" value="<?php echo isset($_GET['FechaPrestamo']) ? htmlspecialchars($_GET['FechaPrestamo']) : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Fecha Devolucion:</td>
                    <td>
                        <input type="text" name="FechaDevolucion" class="form-control" value="<?php echo isset($_GET['FechaDevolucion']) ? htmlspecialchars($_GET['FechaDevolucion']) : ''; ?>">
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <!-- Agregar clases de Bootstrap a los botones -->
            <input type="submit" name="btnRegistrar" class="btn btn-success" value="Registrar">
            <input type="submit" name="btnConsultar" class="btn btn-info" value="Consultar">
            <input type="submit" name="btnActualizar" class="btn btn-warning" value="Actualizar">
            <input type="submit" name="btnEliminar" class="btn btn-danger" value="Eliminar">
        </form>
    </div>

    <!-- Agregar enlace al archivo JS de Bootstrap y al archivo jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
