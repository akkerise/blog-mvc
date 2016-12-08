<?php

class Blog extends Controller
{

    public function travel()
    {
        $limit = 6;
        $totalBlog = $this->model->getTotal(1);
        $totalBlog = intval($totalBlog["total_blogs"]);
        $totalPage = ceil($totalBlog / $limit);
        if (isset($_GET['page'])) {
            $currentPage = $_GET['page'];
            if(!is_numeric($_GET['page'])) {
                $_GET['page'] = $totalPage + 1;
            }
            $travel = $this->model->getBlog(1, $limit, $_GET['page']);
        } else {
            $currentPage = 1;
            $travel = $this->model->getBlog(1, $limit, 1);
        }
        //load view
        require APP . "view/__templates/header.php";
        require APP . "view/travel.php";
        require APP . "view/__templates/footer.php";
    }

    public function music()
    {
        $music = $this->model->getBlog(2);
        //load view
        require APP . "view/__templates/header.php";
        require APP . "view/music.php";
        require APP . "view/__templates/footer.php";
    }
}