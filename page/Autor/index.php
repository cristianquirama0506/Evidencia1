<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        Autores
    </h1>
  
    <form action="procesar.php" method="POST">
        <table>
            <tr>
            <td>
            codigo:
            </td>
            <td>
                <input type="text" name="Codigo" value="<?php echo isset($_GET['Codigo']) ? htmlspecialchars($_GET['Codigo']) : ''; ?>">
            </td>
            </tr>
            <tr>
                <td>
                    Nombre:
                </td>
                <td>
                    <input type="text" name="Nombre" value="<?php echo isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : ''; ?>">
                </td>
            </tr>

        </table>
        <br>
        <br>
        <input type="submit" name="btnRegistrar" value="Registrar">
        <input type="submit" name="btnConsultar" value="Consultar">
        <input type="submit" name="btnActualizar" value="Actualizar">
        <input type="submit" name="btnEliminar" value="Eliminar">
    </form>
</body>
</html>