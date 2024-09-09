<?php
    require_once("autoload.php");

    $objLibro = new Libro();
    $libros = $objLibro->getLibros();

    foreach ($libros as $libro) {
        echo "<li>";
        echo "<strong>Título:</strong> " . htmlspecialchars($libro['titulo']) . "<br>";
        echo "<strong>Autor:</strong> " . htmlspecialchars($libro['autor']) . "<br>";
        echo "<strong>Idioma:</strong> " . htmlspecialchars($libro['idioma']) . "<br>";
        echo "<strong>Editorial:</strong> " . htmlspecialchars($libro['editorial']);
        echo "</li>";
    }
?>