<?php

class Model
{

    private $db;

    public function __construct()
    {

        $this->db = DB::getConn();
    }

    public function all()
    {

        $query = $this->db->prepare('SELECT * FROM clubes');

        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function find($id)
    {

        $query = $this->db->prepare('SELECT * FROM clubes WHERE id=:id');

        $query->execute([
            ':id' => $id
        ]);

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function update()
    {
        $query = $this->db->prepare('UPDATE clubes SET nombre=:nombre, ciudad=:ciudad WHERE id = :id');

        $query->execute([
            ':id' => $_GET["id"],
            ':nombre' => $_GET["nombre"],
            ':ciudad' => $_GET["ciudad"],
        ]);

        return $query;
    }

    public function drop(){
        $query = $this->db->prepare('DELETE FROM clubes WHERE id=:id');

        $query->execute([
            ':id' => $_GET["id"]
        ]);

        return $query;

    }

}
