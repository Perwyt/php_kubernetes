<?php


class Noticia
{
    private $titulo;
    private $contenido;
    private $autor;
    /* @var $dbConn mysqli */
    private $dbConn;

    public function __construct($dbConn, $titulo, $contenido, $autor)
    {
        $this->dbConn = $dbConn;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->autor = $autor;

    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * @param mixed $contenido
     */
    public function setContenido($contenido): void
    {
        $this->contenido = $contenido;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor): void
    {
        $this->autor = $autor;
    }

    public function insertar(){
        $autorIdQuery = "SELECT id FROM users WHERE name = '{$this->autor}'";
        $autorIdResult = $this->dbConn->query($autorIdQuery);
        $autorId = $autorIdResult->fetch_assoc()['id'];

        $query = "INSERT INTO post(titulo, contenido, id_autor) VALUES ({$this->titulo}, {$this->contenido},{$autorId})";
    }
}