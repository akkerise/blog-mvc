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

    public function getBlog($id_cate, $limit = 6, $page = 1)
    {
        $sql = "SELECT * FROM blogs WHERE id_category = $id_cate ORDER BY date DESC" . " LIMIT " . (($page - 1) * $limit) . "," . $limit;
        try{
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function getTotal($id_cate)
    {
        $sql = "SELECT COUNT(*) as total_blogs FROM blogs WHERE id_category = $id_cate";
        try{
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    public function getCategory()
    {
        $sql = "SELECT * FROM categories";
        try{
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function getCategoryById($category_id)
    {
        $sql = "SELECT * FROM categories WHERE category_id = $category_id";
        try{
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function createCategory($name_category, $description)
    {
        $sql = "INSERT INTO categories (name_category, description) VALUES (:name_category, :description)";
        try{
            $query = $this->db->prepare($sql);
            $parameters = array(
                ":name_category" => $name_category,
                ":description" => $description
            );
            return $query->execute($parameters);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function editCategory($category_id, $type, $name_category = null, $description = null)
    {
//        $sql = "UPDATE categories SET name_category = :name_category, description = :description WHERE category_id = $category_id";
        switch ($type) {
            case "name_category":
                $sql = "UPDATE categories SET name_category = :name_category WHERE category_id = $category_id";
                try{
                    $query = $this->db->prepare($sql);
                    $parameters = array(
                        ":name_category" => $name_category
                    );
                    $query->execute($parameters);
                    return $name_category;
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
                break;
            case "category_description":
                $sql = "UPDATE categories SET description = :description WHERE category_id = $category_id";
                try{
                    $query = $this->db->prepare($sql);
                    $parameters = array(
                        ":description" => $description
                    );
                    $query->execute($parameters);
                    return $description;
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
                break;
            default:
                break;
        }
    }

    public function getBlogAdmin()
    {
        $sql = "SELECT a.*, b.name_category, c.username FROM blogs a INNER JOIN categories b ON a.category_id = b.category_id INNER JOIN users c ON a.user_id = c.user_id ORDER BY a.created_at DESC";
        try{
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function createBlog($title, $description, $content, $category_id, $user_id)
    {
        $sql = "INSERT INTO blogs (title, description, content, category_id, user_id) VALUES (:title, :description, :content, :category_id, :user_id)";
        try{
            $query = $this->db->prepare($sql);
            $parameters = array(
                ":title" => $title,
                ":description" => $description,
                ":content" => $content,
                ":category_id" => $category_id,
                ":user_id" => $user_id
            );
            return $query->execute($parameters);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
