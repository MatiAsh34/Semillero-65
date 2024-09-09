<?php
    require_once("autoload.php");

    $objLibro = new Libro();

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $idioma = $_POST['idioma'];
        $editorial = $_POST['editorial'];

        $idInsert = $objLibro->InsertarLibro($titulo, $autor, $idioma, $editorial);

        if ($idInsert) {
            echo "Libro insertado con éxito.";
            echo '<script>
                    setTimeout(function(){
                        window.location.href = "index.php";
                    }, 3000);
                  </script>';
        } else {
            echo "Error: El libro ya existe o hubo un problema al insertar.";
            echo '<script>
                    setTimeout(function(){
                        window.location.href = "index.php";
                    }, 3000);
                  </script>';
        }
    }
?>