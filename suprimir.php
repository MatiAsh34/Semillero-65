<?php
    require_once("autoload.php");
    
    $objLibro = new Libro();

    $id = $_POST['id'];

    $resultado = $objLibro->SuprimirLibro($id);

    if ($resultado) {
        echo "Libro Eliminado exitosamente.";
        echo '<script>
                    setTimeout(function(){
                        window.location.href = "index.html";
                    }, 3000);
                  </script>';
    } else {
        echo "Error al Eliminar el libro.";
        echo '<script>
                    setTimeout(function(){
                        window.location.href = "index.html";
                    }, 3000);
                  </script>';
    }
?>