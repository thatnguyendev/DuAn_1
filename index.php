<?php
include 'model/pdo.php';
include 'view/index/product_index/Mproduct_index.php';
include 'model/MUser.php';


include 'view/index/header.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'register':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {

                $name = $_POST['name'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];

                if ($name == '' || $password == '' || $phone == '' || $email == '') {
                    $thongbao = ('Bạn cần nhập đầy đủ tất cả thông tin');
                } else {
                    add_user();
                    $thongbao = "Đăng ký thành công";
                }
            }
            include 'view/index/register.php';
            break;
        case 'log_in':
            include 'view/index/log_in.php';
            break;
        default:
            break;
    }
} else {
    $Product_DB = show_product_DB();
    $Products = show_product();
    include 'view/index/main.php';
}

include 'view/index/footer.php';
