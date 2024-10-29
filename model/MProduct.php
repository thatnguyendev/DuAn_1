<?php

//ADD PRODUCT
function add_product($name, $img, $price, $description, $quantity, $category)
{
    $sql = "insert into product(name, img, price, description, quantity, category) values('$name' ,'$img', '$price', '$description', '$quantity', '$category')";
    pdo_execute($sql);
}

//SHOW TABLE PRODUCT
function show_table_product($kyw, $maLH)
{
    // //fetch dữ liệu show ra table
    $sql = " select * from product where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($maLH > 0) {
        $sql .= " and category ='" . $maLH . "'";
    }
    $sql .= " order by maPr";
    $listProduct = pdo_query($sql);
    return $listProduct;
}

//DELETE PRODUCT
function delete_product()
{
    $sql = " delete from product where maPr =" . $_GET['id'];
    pdo_execute($sql);
}

//SHOWFROM EDIT CATEGORY
function showfrom_edit_product()
{
    //Gửi yêu get category
    $sql = " select * from product where maPr =" . $_GET['id'];
    $Product = pdo_query_one($sql);
    return $Product;
}

//UPDATE CATEGORY

function update_product()
{
    $maPr = $_POST['maPr'];
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

    if ($img != "") {
        $sql = "update product set  maPr='" . $maPr . "', name='" . $name . "', img='" . $img . "', price='" . $price . "', description='" . $description . "', category='" . $category . "', quantity='" . $quantity . "' where maPr=" . $maPr;
    } else {
        $sql = "update product set  maPr='" . $maPr . "', name='" . $name . "', price='" . $price . "', description='" . $description . "', category='" . $category . "', quantity='" . $quantity . "'   where maPr=" . $maPr;
    }

    pdo_execute($sql);
}
