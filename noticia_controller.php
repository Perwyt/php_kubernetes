<?php
require_once  "Noticia.php";
if (isset($_POST['insertar_noticia'])){
    if (isset($_POST['titulo']) && isset($_POST['contenido']) && isset($_POST['autor'])){
        $titulo = $_POST['titulo'];
        $contenido = $_POST['contenido'];
        $autor = $_POST['autor'];
    }
}