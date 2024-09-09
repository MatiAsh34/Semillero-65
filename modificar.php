<?php
    require_once("autoload.php");
    
    $objLibro = new Libro();

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $idioma = $_POST['idioma'];
    $editorial = $_POST['editorial'];

    $resultado = $objLibro->ActualizarLibro($id, $titulo, $autor, $idioma, $editorial);

    if ($resultado) {
        echo "Libro actualizado exitosamente.";
        echo '<script>
                    setTimeout(function(){
                        window.location.href = "index.html";
                    }, 3000);
                  </script>';
    } else {
        echo "Error al actualizar el libro.";
        echo '<script>
                    setTimeout(function(){
                        window.location.href = "index.html";
                    }, 3000);
                  </script>';
    }
?>