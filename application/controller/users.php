<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/12/2016
 * Time: 4:14 PM
 */
class Users extends Controller
{
    public function index()
    {
        $load_users = $this->model->getUsers();
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/users.php";
        require APP . "view/admin/__templates/footer.php";
    }

    public function newUsers()
    {
        if (isset($_POST['save_user'])) {
            $path = 'C://xampp/htdocs/blog-mvc/public/images/user/';
            $username = $_POST['user'];
            $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $avatar = $_FILES['avatar']['name'];
            $id_group = $_POST['id_group'];

            if ($this->model->insertUser($username, $password, $email, $avatar, $id_group)) {
                move_uploaded_file($_FILES['avatar']['tmp_name'], $path . $_FILES['avatar']['name']);
                header("location:" . URL . "admin/users");
            }
        }
    }

    public function edit_user($user_id)
    {
        $user = $this->model->getUserById($user_id);
        if (isset($_POST["name"]) && $_POST["name"] == "rule") {
            $newRule = $_POST["value"];
            $edit = $this->model->editUser($user_id, $newRule);
            echo $edit;
        }
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/edit_user.php";
        require APP . "view/admin/__templates/footer.php";
    }

    public function delete()
    {
        if (isset($_POST['action']) == "delete") {
            $id_user = $_POST['id'];
            if ($this->model->delete($id_user)) {
                echo "delete_thanhcong";
            }
        }
    }
}