<?php

class Blog extends Controller
{

    public function travel()
    {
        $travel = $this->model->getBlog(1);
        //load view
        require APP . "view/__templates/header.php";
        require APP . "view/travel.php";
        require APP . "view/__templates/footer.php";
    }
}