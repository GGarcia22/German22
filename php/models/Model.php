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
            ':id' => $_POST["id"],
            ':nombre' => $_POST["nombre"],
            ':ciudad' => $_POST["ciudad"],
        ]);

        return $query;
    }

    public function drop(){
        $query = $this->db->prepare('DELETE FROM clubes WHERE id=:id');

        $query->execute([
            ':id' => $_POST["id"]
        ]);

        return $query;

    }

    public function findCateg(){
        $query = $this->db->prepare('SELECT * FROM categorias');

        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    

    /* public function upload(){
        if (isset($_FILES['escudo']) && $_FILES['escudo']['tmp_name']) {
            $destino = __DIR__ . '../../escudos';
            $nombre = uniqid();
            $ext = pathinfo($_FILES['escudo']['name'], PATHINFO_EXTENSION);
            $escudo = "$nombre.$ext";
            move_uploaded_file($_FILES['escudo']['tmp_name'], "$destino$escudo");
        }

        $query = $this->db->prepare('INSERT INTO clubes VALUES (nombre=:nombre, ciudad=:ciudad, año_fundacion=:año_fundacion, 
        origenes=:origenes, escudo=:escudo, id_categoria=:id_categoria)');

        $query->execute([
            ':nombre' => $_POST["nombre"],
            ':ciudad' => $_POST["ciudad"],
            ':año_fundacion' => $_POST["año_fundacion"],
            ':origenes' => $_POST["origenes"],
            ':escudo' => $escudo,
            ':id_categoria' => $_POST["id_categoria"],
        ]);

        return $query;
    } */

    
        
    

    }
