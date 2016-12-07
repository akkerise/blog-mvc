<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getHome($id_cate, $limit)
    {
        $sql = "SELECT * FROM blogs a INNER JOIN categories b ON a.id_category = b.id_category INNER JOIN users c ON c.id_user = a.id_user  WHERE a.id_category = $id_cate ORDER BY a.id_blog DESC LIMIT $limit";
        try{
            $query = $this->db->prepare($sql);
            $query->execute();
            if ($limit == 1) {
                return $query->fetch(PDO::FETCH_ASSOC);
            }
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function getBlog($id_cate)
    {
        $sql = "SELECT * FROM blogs WHERE id_category = $id_cate";
        try{
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
