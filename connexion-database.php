<?php

/**
 * Gestion de la base de donnes
 *
 */
class DbConnect
{

    private $conn;

    function __construct()
    {
    }

    function __destruct()
    {
    }

    /**
     * Establishing database connection
     */
    function connect()
    {
        try {
            // On se connecte à MySQL
            $this->conn = new PDO('mysql:host=localhost;dbname=gestionstock;charset=utf8',
                'root', '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            return $this->conn;

        } catch (Exception $e) {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : ' . $e->getMessage());
        }
    }

    function close()
    {

    }

}

?>