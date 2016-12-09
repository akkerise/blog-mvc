<?php

class Admin  extends Controller
{
    public function index ()
    {
        require APP . "view/admin/login.php";
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

    public function users ()
    {
        $load_users = $this->model->getUsers();
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/users.php";
        require APP . "view/admin/__templates/footer.php";
    }
    public function newUsers ()
    {
        if (isset($_POST['save_user']))
        {
            $username = $_POST['user'];
            $password = password_hash($_POST['pass'],PASSWORD_DEFAULT);
            $email = $_POST['email'];
            if($this->model->insertUser($username, $password, $email)) {
                header("location:" . URL . "admin/users");
            }

        }
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
}