    <?php
    if (is_array($Category)) {
        extract($Category);
    }
    ?>

    <div class="m-5">
        <h1 class="mb-3">Cập nhật category</h1>
        <div class="row" id="product-container"></div>
        <!-- FORM NHẬP SẢN PHẨM -->
        <form action="admin.php?act=update_category" method="post">
            Mã loại: <input type="text" name="maLH" id="id" readonly
                value="<?php if (isset($maLH) && ($maLH != "")) echo ($maLH); ?>"><br><br>
            Name: <input type="text" name="name" id="name"
                value="<?php if (isset($name) && ($name != "")) echo ($name); ?>"><br><br>

            <input type="hidden" name="id" value="<?php if (isset($maLH) && ($maLH > 0)) echo ($maLH); ?>">
            <input type="submit" name="update" value="Cập nhật">
        </form>
    </div>