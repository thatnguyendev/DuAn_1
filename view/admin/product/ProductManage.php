<div class="container-fluid">
    <div class="row ">
        <div class="container mt-3">
            <h1 class="text-center mb-3 mt-3">QUẢN LÝ PRODUCT</h1>
            <div class="row" id="product-container"></div>
            <!-- FORM NHẬP SẢN PHẨM -->
            <div class="container">
                <div class="card-header">
                    <h5>ADD PRODUCT</h5>
                    <form action="admin.php?act=add_product" id="form_add_product" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="productId" class="mb-2">Image</label>
                            <input type="file" class="form-control" name="img" id="img" placeholder="Image">
                        </div>
                        <div class="form-group mb-3">
                            <label for="productName" class="mb-2">Product Name</label>
                            <input type="text" class="form-control" name="name" id="productName"
                                placeholder="Enter product name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="productPrice" class="mb-2">Price</label>
                            <input type="number" class="form-control" name="price" id="productPrice"
                                placeholder="Enter product price">
                        </div>
                        <div class="form-group mb-3">
                            <label for="productDescription" class="mb-2">Description</label>
                            <textarea class="form-control" name="description" id="productDescription" rows="3"
                                placeholder="Enter product description"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="productCategory" class="mb-2">Category</label>
                            <select name="category">
                                <?php
                                extract($listCategory);
                                foreach ($listCategory as $category) {
                                    extract($category);
                                    echo ('<option value="' . $maLH . '">' . $name . '</option>');
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="productBrand" class="mb-2">Quantity</label>
                            <input type="number" class="form-control" name="quantity" id="productQuantity"
                                placeholder="Enter product quantity">
                        </div>
                        <input type="submit" name="them" value="Thêm" class="btn btn-primary mb-3">
                    </form>

                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    };
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- ================================ -->
    <!-- ================================ -->
    <section class="container-fluid mt-5">
        <div class="container mt-5">
            <div class="row">
                <h3 class="mb-3">DANH SÁCH PRODUCT</h3>
                <form action="admin.php?act=add_product" method="post" class="mb-3">
                    <input type="text" name="kyw">
                    <select name="category">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listCategory as $category) {
                            extract($category);
                            echo ('<option value="' . $maLH . '">' . $name . '</option>');
                        }
                        ?>
                    </select>
                    <input type="submit" name="timkiem" value="Tìm kiếm">
                </form>

                <table border="1px" class="text-center mb-5" id="spnoibat">
                    <tr>
                        <th class="col-1 border-1">STT</th>
                        <th class="col-3 border-1">Tên sản phẩm</th>
                        <th class="col-2 border-1">Hình ảnh</th>
                        <th class="col-2 border-1">Giá</th>
                        <th class="col-2 border-1">Số lượng</th>
                        <th class="col-2 border-1">Chức năng</th>
                    </tr>
                    <!-- SHOW table -->
                    <tbody>
                        <?php
                        $i = 1;
                        extract($ListProduct);
                        foreach ($ListProduct as $Product) {
                            extract($Product);

                            echo ('<tr>
                                            <td class="border-1">' . $i . '</td>
                                            <td class="border-1">' . $name . '</td>
                                            <td class="border-1"><img width="150px" src="view/images/' . $img . '" alt=""></td>
                                            <td class="border-1">' . $price . '</td>
                                            <td class="border-1">' . $quantity . '</td>
                                            <td class="border-1">
                                                <a href="admin.php?act=edit_product&id=' . $maPr . '" class="text-decoration-none"><button>Sửa</button></a>
                                                <a href="admin.php?act=delete_product&id=' . $maPr . '" class="text-decoration-none"><button>Xóa</button></a>
                                            </td>
                                        </tr>');
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>