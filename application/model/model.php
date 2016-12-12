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
    // login

    function login ($name, $pass)
    {
        $sql = "SELECT * FROM users WHERE username = :username";
        try{
            $query = $this->db->prepare($sql);
            $parameters = array(
                ":username" => $name,
            );
            $query->execute($parameters);
            return $query->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function check_user ($namerg)
    {
        $sql = "SELECT * FROM users WHERE username = :namerg";
        try {
            $query = $this->db->prepare($sql);
            $paramerers = array(
                ":namerg" => $namerg
            );
            $query->execute($paramerers);
            return $query->fetch(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
    function register ($name, $email, $pass)
    {
        $sql = "INSERT INTO users ( username, password, email ) VALUES (:username, :password, :email)";
        try{
            $query = $this->db->prepare($sql);
            $paramerers = array(
                ":username" => $name,
                ":password" => $pass,
                ":email" => $email
            );
            $query->execute($paramerers);
            echo $id =  $this->db->lastInsertId();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function getHome($id_cate, $limit)
    {
        $sql = "SELECT * FROM blogs a INNER JOIN categories b ON a.category_id = b.category_id INNER JOIN users c ON c.user_id = a.user_id  WHERE a.category_id = $id_cate ORDER BY a.blog_id DESC LIMIT $limit";
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
        $sql = "SELECT * FROM blogs WHERE category_id = $id_cate ORDER BY created_at DESC" . " LIMIT " . (($page - 1) * $limit) . "," . $limit;
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
        $sql = "SELECT COUNT(*) as total_blogs FROM blogs WHERE category_id = $id_cate";
        try{
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    // load users
    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        try{
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
    // end load users

    // insert users
    public function insertUser ($username, $password, $email, $avatar,  $id_group)
    {
        $sql = "INSERT INTO users (username, password, email, avatar , id_group) VALUES (:username, :password, :email, :avatar, :id_group)";
        try{
            $query = $this->db->prepare($sql);
            $parameter = array(
                ":username" => $username,
                ":password" => $password,
                ":email" => $email,
                ":avatar" => $avatar,
                ":id_group" => $id_group
            );
            return $query->execute($parameter);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
    // end insert users

    // delete uswsers
    public function delete ($id_user)
    {
        $sql = "DELETE FROM users WHERE user_id = :id_user";
        try {
            $query = $this->db->prepare($sql);
            $parameter = array(
              ":id_user" => $id_user
            );
            return $query->execute($parameter);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    // thai gửi
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

    public function createBlog($title, $description, $content, $category_id, $user_id, $image)
    {
        $sql = "INSERT INTO blogs (title, description, content, category_id, user_id , image) VALUES (:title, :description, :content, :category_id, :user_id, :image)";
        try{
            $query = $this->db->prepare($sql);
            $parameters = array(
                ":title" => $title,
                ":description" => $description,
                ":content" => $content,
                ":category_id" => $category_id,
                ":user_id" => $user_id,
                ":image" => $image

            );
            return $query->execute($parameters);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
