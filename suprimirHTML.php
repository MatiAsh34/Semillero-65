<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Libro</title>
    <link rel="stylesheet" href="stylesInsertarModificarSuprimir.css">
</head>
<body>
    <h1>Eliminar Libro</h1>
    <form action="suprimir.php" method="post">
        <label for="id">ID del Libro:</label>
        <input type="text" id="id" name="id" required><br>

        <input type="submit" value="Eliminar">
    </form>
    <a href="index.php">Regresar al Inicio</a>
</body>
</html>
