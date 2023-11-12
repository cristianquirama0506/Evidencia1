<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>

    <h1>Libros</h1>
  
    <form action="procesar.php" method="POST">
        <table>
            <tr>
                <td>Código:</td>
                <td>
                    <input type="text" name="Codigo" value="<?php echo isset($_GET['Codigo']) ? htmlspecialchars($_GET['Codigo']) : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td>
                    <input type="text" name="Nombre" value="<?php echo isset($_GET['Nombre']) ? htmlspecialchars($_GET['Nombre']) : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>Título:</td>
                <td>
                    <input type="text" name="Titulo" value="<?php echo isset($_GET['Titulo']) ? htmlspecialchars($_GET['Titulo']) : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>ISBN:</td>
                <td>
                    <input type="text" name="ISBN" value="<?php echo isset($_GET['ISBN']) ? htmlspecialchars($_GET['ISBN']) : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>Editorial:</td>
                <td>
                    <input type="text" name="Editorial" value="<?php echo isset($_GET['Editorial']) ? htmlspecialchars($_GET['Editorial']) : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>Páginas:</td>
                <td>
                    <input type="text" name="Paginas" value="<?php echo isset($_GET['Paginas']) ? htmlspecialchars($_GET['Paginas']) : ''; ?>">
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
