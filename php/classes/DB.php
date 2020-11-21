<?php

class DB
{

    public static function getConn()
    {
        $db=null;

        try {

            $db = new PDO('mysql:dbname=clubes_escocia;host=localhost', 'root', '');
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
        return $db;
    }
}
