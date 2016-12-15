<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/15/2016
 * Time: 12:03 PM
 */
class Blogs extends Controller
{
    public function detail($blog_id)
    {
        $detail = $this->model->detailBlog($blog_id);
        $comments = $this->model->getCommentsByBlog($blog_id);
        require APP . "view/__templates/header.php";
        require APP . "view/detail.php";
        require APP . "view/__templates/footer.php";
    }
}