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
            $path = 'C://xampp/htdocs/blog-mvc/public/images/blog/';
            $title = $_POST["post_title_create"];
            $description = $_POST["post_description_create"];
            $content = $_POST["post_content_create"];
            $category_id = $_POST["post_category_create"];
            $user_id = $_SESSION['id_user'];
            $image = $_FILES['post_image_create']['name'];
            if ($this->model->createBlog($title, $description, $content, $category_id, $user_id, $image)) {
                move_uploaded_file($_FILES['post_image_create']['tmp_name'], $path.$_FILES['post_image_create']['name']);
                header("Location: " . URL ."posts");
            }
        }
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/create_post.php";
        require APP . "view/admin/__templates/footer.php";
    }
    public function view_edit_post ($blog_id)
    {
        $totalCate = $this->model->getCategory();
        $edit_blog = $this->model->getOneBlog($blog_id);
//        $category_name = $this->model->get_category_blog($edit_blog["category_id"]);
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/edit_posts.php";
        require APP . "view/admin/__templates/footer.php";

    }
    public function edit_post ()
    {
        if (isset($_POST['btn_edit_post'])) {
            var_dump("aaaaaaaaa");
            header("Location: " . URL ."posts");
//            $path = 'C://xampp/htdocs/blog-mvc/public/images/blog/';
//            $title = $_POST["post_title_create"];
//            $description = $_POST["post_description_edit"];
//            $content = $_POST["edit_post_content"];
//            $category_id = $_POST["post_category_edit"];
//            $user_id = $_SESSION['id_user'];
//            $image = $_FILES['post_image_edit']['name'];
//            if ($this->model->edit_blog($title, $description, $content, $category_id, $user_id, $image)){
//                move_uploaded_file($_FILES['post_image_create']['tmp_name'], $path.$_FILES['post_image_create']['name']);
//                header("Location: " . URL ."posts");
//            }
        }
    }
}