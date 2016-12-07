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

}