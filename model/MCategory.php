<?php

//ADD CATEGORY
function add_category($name)
{
    $sql = "insert into category(name) values('$name')";
    pdo_execute($sql);
}

//SHOW TABLE
function show_table_category()
{
    // //fetch dữ liệu show ra table
    $sql = " select * from category order by maLH";
    $listCategory = pdo_query($sql);
    return $listCategory;
}

//DELETE VATEGORY
function delete_category()
{
    $sql = " delete from category where maLH =" . $_GET['id'];
    pdo_execute($sql);
}

//SHOWFROM EDIT CATEGORY
function showfrom_edit_category()
{
    //Gửi yêu get category
    $sql = " select * from category where maLH =" . $_GET['id'];
    $Category = pdo_query_one($sql);
    return $Category;
}

//UPDATE CATEGORY

function update_category()
{
    $name = $_POST['name'];
    $maLH = $_POST['id'];
    $sql = "update category set name='" . $name . "' where maLH=" . $maLH;
    pdo_execute($sql);
}