<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Libro</title>
    <link rel="stylesheet" href="stylesInsertarModificarSuprimir.css">
</head>
<body>
    <h1>Modificar Libro</h1>
    <form action="modificar.php" method="POST">

        <label for="id">ID:</label>
        <input type="text" id ="id" name="id" required>

        <label for="titulo">Nuevo Título:</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="autor">Nuevo Autor:</label>
        <input type="text" id="autor" name="autor" required>

        <label for="idioma">Nuevo Idioma:</label>
        <input type="text" id="idioma" name="idioma" required>

        <label for="editorial">Nueva Editorial:</label>
        <input type="text" id="editorial" name="editorial" required>

        <input type="submit" value="Actualizar Libro">
        
    </form>

    <a href="index.php">Regresar al Inicio</a>
</body>
</html>
