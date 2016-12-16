<?php

class travel extends Controller
{
    public function index ()
    {
        $category_id = 1;
        $trang = $_GET['trang']; // lấy số trang hiện tại
        $totalPostsCate = $this->model->getBlogCate($category_id); // lấy users
        $so_post = count($totalPostsCate);
        $so_trang = ceil($so_post / 4);
        if ($so_post < 4 ) {
            $trang_hien_tai = 0;
            $so_trang = 1;
        }
        else {
            $trang_hien_tai = ($trang - 1)*4;
        }

        $row_travel = $this->model->getCategory_blog($category_id, $trang_hien_tai,4);
        require APP . "view/__templates/header.php";
        require APP . "view/travel.php";
        require APP . "view/__templates/footer.php";
    }

}