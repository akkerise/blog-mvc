<?php

class Admin  extends Controller
{
    public function index()
    {
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/index.php";
        require APP . "view/admin/__templates/footer.php";
    }
    public function users ()
    {
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/__templates/footer.php";
    }
}