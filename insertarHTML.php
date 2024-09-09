<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Libro</title>
    <link rel="stylesheet" href="stylesInsertarModificarSuprimir.css">
</head>
<body>
    <h1>Insertar Libro</h1>
    <form action="insertar.php" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>

        <label for="idioma">Idioma:</label>
        <input type="text" id="idioma" name="idioma" required><br>

        <label for="editorial">Editorial:</label>
        <input type="text" id="editorial" name="editorial" required><br>

        <input type="submit" value="Insertar">
    </form>
    <a href="index.html">Regresar al Inicio</a>
</body>
</html>