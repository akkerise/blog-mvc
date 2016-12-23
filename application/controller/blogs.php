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
        $view = $this->model->getView($blog_id) + 1;
        $updateView = $this->model->updateView($blog_id, $view);
        $comments = $this->model->getCommentsByBlog($blog_id);
        $category_id = $this->model->getCategoryByBlog($blog_id);
        $related = $this->model->getRelatedPosts($category_id);

        if (isset($_POST["action"]) && $_POST["action"] == "comment") {
            $comment = $_POST["comment"];
            $blog_id = $_POST["blog_id"];
            $user_id = $_POST["user_id"];
            $reply_to = $_POST["reply_to"];
            $comment_id = $this->model->submitComment($comment, $user_id, $blog_id, $reply_to);
            $submitComment = $this->model->getCommentById($comment_id);
            die($submitComment);
        }

        require APP . "view/__templates/header.php";
        require APP . "view/detail.php";
        require APP . "view/__templates/footer.php";
    }
}