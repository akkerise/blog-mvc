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
        $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
        try{
            $query = $this->db->prepare($sql);
            $parameters = array(
                ":username" => $name,
                ":password" => $pass
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
    public function insertUser ($username, $password, $email)
    {
        $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
        try{
            $query = $this->db->prepare($sql);
            $parameter = array(
                ":username" => $username,
                ":password" => $password,
                ":email" => $email
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
        $sql = "DELETE FROM users WHERE id = :id_user";
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
}
