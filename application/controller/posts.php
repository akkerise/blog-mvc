<?php

class Posts extends Controller
{

    public function index()
    {
        $totalPosts = $this->model->getBlogAdmin();
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/posts.php";
        require APP . "view/admin/__templates/footer.php";
    }

    public function create_post()
    {
        $totalCate = $this->model->getCategory();
        if (isset($_POST["btn_create_post"])) {
            $title = $_POST["post_title_create"];
            $description = $_POST["post_description_create"];
            $content = $_POST["post_content_create"];
            $category_id = $_POST["post_category_create"];
            $user_id = 1;
            if ($this->model->createBlog($title, $description, $content, $category_id, $user_id)) {
                header("Location: " . URL ."posts");
            }
        }
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/create_post.php";
        require APP . "view/admin/__templates/footer.php";
    }
}