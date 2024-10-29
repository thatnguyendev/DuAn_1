<?php
include 'model/pdo.php';
include 'model/MCategory.php';
include 'model/MProduct.php';


include 'view/admin/header_admin.php';
include 'view/admin/main_admin.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            //=================================
        case 'add_category':
            //Add category mới vào sql
            if (isset($_POST['them']) && ($_POST['them'])) {
                $name = $_POST['name'];
                add_category($name);
                $thongbao = "thêm thành công";
            }
            $listCategory = show_table_category();
            include 'view/admin/category/CategoryManage.php';
            break;
        case 'delete_category':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                //Gửi yêu cầu xóa
                delete_category();
            }
            $listCategory = show_table_category();
            include 'view/admin/category/CategoryManage.php';
            break;
        case 'edit_category':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $Category = showfrom_edit_category();
            }
            include 'view/admin/category/VCategory.php';
            break;
        case 'update_category':
            if (isset($_POST['update']) && ($_POST['update'])) {
                update_category();
                $thongbao = "cập nhật thành công";
            }
            //show lại bảng
            $listCategory = show_table_category();
            include 'view/admin/category/CategoryManage.php';
            break;


        case 'add_product':
            //Add product mới vào sql
            if (isset($_POST['them']) && ($_POST['them'])) {

                $name = $_POST['name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $category = $_POST['category'];
                $quantity = $_POST['quantity'];
                $img = $_FILES['img']['name'];
                $target_dir = "view/images/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                };
                add_product($name, $img, $price, $description, $quantity, $category);
                $thongbao = "thêm thành công";
            }


            if (isset($_POST['timkiem']) && ($_POST['timkiem'])) {
                $kyw = $_POST['kyw'];
                $maLH = $_POST['category'];
            } else {
                $kyw = '';
                $maLH = '';
            }
            $ListProduct = show_table_product($kyw, $maLH);
            $listCategory = show_table_category();
            include 'view/admin/product/ProductManage.php';
            break;

        case 'delete_product':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                //Gửi yêu cầu xóa
                delete_product();
            }

            $kyw = '';
            $maLH = '';
            $ListProduct = show_table_product($kyw, $maLH);
            $listCategory = show_table_category();
            include 'view/admin/product/ProductManage.php';
            break;
        case 'edit_product':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $Product = showfrom_edit_product();
            }
            $listCategory = show_table_category();
            include 'view/admin/product/VProduct.php';
            break;

        case 'update_product':
            if (isset($_POST['update_product']) && ($_POST['update_product'])) {
                update_product();
                $thongbao = "cập nhật thành công";
            }
            //show lại bảng
            $kyw = '';
            $maLH = '';
            $ListProduct = show_table_product($kyw, $maLH);
            $listCategory = show_table_category();
            include 'view/admin/product/ProductManage.php';
            break;





        default:
            break;
    }
} else {
    include 'view/admin/main_admin.php';
}

include 'view/admin/footer_admin.php';