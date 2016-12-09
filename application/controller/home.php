<?php

class Home extends Controller
{

    public function index()
    {
        $travel = $this->model->getHome(1, 1);
        $music = $this->model->getHome(2, 2);
        $fashion = $this->model->getHome(3, 3);
        //load view
        require APP . "view/__templates/header.php";
        require APP . "view/index.php";
        require APP . "view/__templates/footer.php";
    }

    public function login ()
    {
        if (isset($_POST['action']) == "login")
        {
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $login = $this->model->login($name,$pass);
            if ($login > 0){
                $_SESSION['login'] = 1;
                $_SESSION['name'] = $login['username'];
                $_SESSION['id_user'] = $login['user_id'];
                echo "thanhcong" ;
            }
            else {
                echo "éo log được rồi nhé";
            }
        }
    }
    public function register ()
    {
        if(isset($_POST['action']) == "register")
        {
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $check = $this->model->check_user($name);

            if ( $check == 0)
            {
                $this->model->register($name, $email, $pass);
            }
            else{
                echo "tachroi";
            }
        }
    }

    public function logout ()
    {
        if (isset($_POST['action']) == "logout")
        {
            unset($_SESSION['login']);
            unset($_SESSION['name']);
            unset($_SESSION['id_user']);
            header('location:' . URL);
        }
    }

}