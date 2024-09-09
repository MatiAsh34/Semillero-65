<?php
    require_once("autoload.php");
    
    class Libro extends Conexion {
        private $strTitulo;
        private $strAutor;
        private $strIdioma;
        private $strEditorial;
        private $conexion;

        public function __construct() {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
        }

        public function libroExiste(string $titulo): bool {
            $sql = "SELECT COUNT(*) FROM libro WHERE titulo = ?";
            $check = $this->conexion->prepare($sql);
            $check->execute([$titulo]);
            return $check->fetchColumn() > 0;
        }

        public function InsertarLibro(string $titulo, string $autor, string $idioma, string $editorial) {
            if ($this->libroExiste($titulo)) {
                return false;
            }
        
            $this->strTitulo = $titulo;
            $this->strAutor = $autor;
            $this->strIdioma = $idioma;
            $this->strEditorial = $editorial;
        
            $sql = "INSERT INTO libro(titulo, autor, idioma, editorial) VALUES(?,?,?,?)";
            $insert = $this->conexion->prepare($sql);
            $arrData = array($this->strTitulo, $this->strAutor, $this->strIdioma, $this->strEditorial);
            $resInsert = $insert->execute($arrData);
        
            if ($resInsert) {
                $idInsert = $this->conexion->lastInsertId();
                return $idInsert; 
            } else {
                return false; 
            }
        }

        public function getLibros(){
            $sql = "SELECT * FROM libro";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetchall(PDO::FETCH_ASSOC);
            return $request;
        }

        public function ActualizarLibro(int $id, string $titulo, string $autor, string $idioma, string $editorial){
            $this->strTitulo = $titulo;
            $this->strAutor = $autor;
            $this->strIdioma = $idioma;
            $this->strEditorial = $editorial;

            $sql = "UPDATE libro SET titulo=?, autor=?, idioma=?, editorial=? WHERE id=$id";
            $update = $this->conexion->prepare($sql);
            $arrData = array($this->strTitulo, $this->strAutor, $this->strIdioma, $this->strEditorial);
            $resExecute = $update->execute($arrData);
            return $resExecute;
        }

        public function SuprimirLibro(int $id){
            $sql = "DELETE FROM libro WHERE id = ?";
            $arrWhere = array($id);
            $delete = $this->conexion->prepare($sql);
            $del = $delete->execute($arrWhere);
            return $del;
        }
    }
?>
