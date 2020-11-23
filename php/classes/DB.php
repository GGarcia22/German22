<?php

class DB
{

    public static function getConn()
    {
        $db=null;

        try {

            $db = new PDO('mysql:dbname=clubes_escocia;host=localhost', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
        return $db;
    }
}
