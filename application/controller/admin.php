<?php

class Admin  extends Controller
{
    public function index ()
    {
        require APP . "view/admin/login.php";

    }

    public function login ()
    {
        if (isset($_POST['login_ad']))
        {
            $name = $_POST['name_ad'];
            $pass = $_POST['pass_ad'];
            $login = $this->model->login($name);
            var_dump(password_verify ($pass, $login['password']));
            if ($login['id_group'] == 1)
            {
                if ( password_verify($pass , $login['password'])) {
                    $_SESSION['login'] = 1;
                    $_SESSION['name'] = $login['username'];
                    $_SESSION['id_user'] = $login['user_id'];
                    $_SESSION['avatar'] = $login['avatar'];
                    $_SESSION['created_at'] = $login['created_at'];
                    header("location:" . URL . "admin/index_view");
                }
                else {
                    header("location:" . URL );
                }
            }

        }
    }
    public function index_view()
    {
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/index.php";
        require APP . "view/admin/__templates/footer.php";
    }

    public function category()
    {
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/category.php";
        require APP . "view/admin/__templates/footer.php";
    }


    public function delete ()
    {
        if (isset($_POST['action']) == "delete")
        {
            $id_user = $_POST['id'];
            if ($this->model->delete($id_user)){
                echo "delete_thanhcong";
            }
        }
    }
    public function logout ()
    {
        if (isset($_POST['logout-ad']))
        {
            unset($_SESSION['login']);
            unset($_SESSION['name']);
            unset($_SESSION['id_user']);
            header('location:' . URL);
        }
    }


}