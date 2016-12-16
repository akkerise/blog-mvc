<?php

class profile extends Controller {

    public function index ()
    {
        $id_user = $_SESSION['id_user'];
        $profile = $this->model->profile($id_user);
        require APP . "view/__templates/header.php";
        require APP . "view/profile.php";
        require APP . "view/__templates/footer.php";
    }

    public function update_ava ()
    {
        if(isset($_POST['post']))
        {

        }
    }
}