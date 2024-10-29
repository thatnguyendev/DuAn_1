<?php

function show_product()
{
    // //fetch dữ liệu show ra table
    $sql = " select * from product";
    $Products = pdo_query($sql);
    return $Products;
}

function show_product_DB()
{
    // //fetch dữ liệu show ra table
    $sql = " select * from product LIMIT 1";
    $Product = pdo_query($sql);
    return $Product;
}
