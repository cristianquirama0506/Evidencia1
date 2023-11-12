<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
     <!-- Agregar enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h1>Autores</h1>
  
        <form action="procesar.php" method="POST">
            <table class="table">
                <tr>
                    <td>Código:</td>
                    <td>
                        <input type="text" name="Codigo" class="form-control" value="<?php echo isset($_GET['Codigo']) ? htmlspecialchars($_GET['Codigo']) : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td>
                        <input type="text" name="Nombre" class="form-control" value="<?php echo isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : ''; ?>">
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <!-- Agregar clases de Bootstrap a los botones -->
            <input type="submit" name="btnRegistrar" class="btn btn-primary" value="Registrar">
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
