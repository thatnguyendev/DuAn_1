<?php
if (is_array($Product)) {
    extract($Product);
}
extract($listCategory);
?>

<div class="container">
    <div class="card-header">

        <h5>UPDATE PRODUCT</h5>

        <form action="admin.php?act=update_product" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="productId" class="mb-2">Mã Product</label><br>
                <input type="text" value="<?php echo $maPr; ?>" class="form-control" name="maPr" id="maPr" readonly>
            </div>
            <div class="form-group mb-3">
                <label for="productId" class="mb-2">Image</label><br>
                <img width="200px" src="view/images/<?php echo $img; ?>" alt="">
                <input type="file" class="form-control" name="img" id="img" placeholder="Image">
            </div>
            <div class="form-group mb-3">
                <label for="productName" class="mb-2">Product Name</label>
                <input type="text" value="<?php if (isset($name) && ($name != "")) echo ($name); ?>"
                    class="form-control" name="name" id="productName" placeholder="Enter product name">
            </div>
            <div class="form-group mb-3">
                <label for="productPrice" class="mb-2">Price</label>
                <input type="number" value="<?php if (isset($price) && ($price != "")) echo ($price); ?>"
                    class="form-control" name="price" id="productPrice" placeholder="Enter product price">
            </div>
            <div class="form-group mb-3">
                <label for="productDescription" class="mb-2">Description</label>
                <input type="text" class="form-control" name="description"
                    value="<?php if (isset($description) && ($description != "")) echo ($description); ?>">
            </div>
            <div class="form-group mb-3">
                <label for="productCategory" class="mb-2">Category</label>
                <select name="category">
                    <?php
                    foreach ($listCategory as $category) {
                        extract($category);
                        if ($maLH == $fk_category) {
                            echo ('<option value="' . $maLH . '" selected>' . $name . '</option>');
                        } else {
                            echo ('<option value="' . $maLH . '">' . $name . '</option>');
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="productBrand" class="mb-2">Quantity</label>
                <input type="number" value="<?php if (isset($quantity) && ($quantity != "")) echo ($quantity); ?>"
                    class="form-control" name="quantity" id="productQuantity" placeholder="Enter product quantity">
            </div>
            <input type="submit" name="update_product" value="Cập nhật" class="btn btn-primary mb-3">
        </form>

    </div>
</div>