<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/9/2016
 * Time: 3:10 PM
 */
class Categories extends Controller
{
    public function index()
    {
        $totalCate = $this->model->getCategory();
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/categories.php";
        require APP . "view/admin/__templates/footer.php";
    }

    public function create_category()
    {
        if (isset($_POST["btn_create_category"])) {
            $name_category = $_POST["caregory_name_create"];
            $description = $_POST["caregory_description_create"];
            if ($this->model->createCategory($name_category, $description)) {
                header("Location: " . URL . "categories");
            }
        }
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/create_category.php";
        require APP . "view/admin/__templates/footer.php";
    }

    public function edit_category($category_id)
    {
        $category = $this->model->getCategoryById($category_id);
        require APP . "view/admin/__templates/header.php";
        require APP . "view/admin/__templates/sidebar.php";
        require APP . "view/admin/edit_category.php";
        require APP . "view/admin/__templates/footer.php";
    }
}