<div class="container_full">
    <img src="view/images/banner/banner.jpg" class="banner" alt="">
    <div class="container">
        <h1>Sản phẩm đặt biệt</h1>
        <div class="row">

            <?php
            extract($Product_DB);
            foreach ($Product_DB as $Pr_db) {
                extract($Pr_db);
                echo ('<div class="col-6 p-5 mg-t-5">
                <div class="sanpham">
                    <img class="img-db" src="view/images/' . $img . '" alt="">
                    <a href="">' . $name . '</a>
                    <p>' . $price . ' vnđ</p>
                    <p>Mã sản phẩm: </p>
                    <a href=""><button class="click">Xem chi tiết</button></a>
                    <button class="click">Thêm Giỏ Hàng</button>
                </div>
            </div> ');
            }

            ?>
            <!-- <div class="col-6 p-5 mg-t-5">
                <div class="sanpham">
                    <img class="img-db" src="view/images/Laptop Acer Aspire 7 A715-76-53PJ NH.QGESV.007.jpg" alt="">
                    <a href="">Tên sản phẩm</a>
                    <p>Giá sản phẩm: </p>
                    <p>Mã sản phẩm: </p>
                    <a href=""><button class="click">Xem chi tiết</button></a>
                    <button class="click">Thêm Giỏ Hàng</button>
                </div>
            </div> -->

            <div class="col-6 p-5">
                <div class="row">
                    <?php
                    extract($Products);
                    foreach ($Products as $Pr) {
                        extract($Pr);

                        echo ('<div class="col-6 padding-l-r-5 mg-t-5">
                                    <div class="sanpham">
                                        <img src="view/images/' . $img . '" alt="">
                                        <a href="">' . $name . '</a>
                                        <p>' . $price . ' vnđ</p>
                                        <p>Mã sản phẩm: </p>
                                        <a href=""><button class="click">Xem chi tiết</button></a>
                                        <button class="click">Thêm Giỏ Hàng</button>
                                    </div>
                                </div>');
                    }
                    ?>

                </div>
            </div>
        </div>


        <h1>Sản phẩm nổi bật</h1>
        <div class="row">
            <?php
            extract($Products);
            foreach ($Products as $Pr) {
                extract($Pr);

                echo ('<div class="col-3">
                                <div class="sanpham">
                                    <img src="view/images/' . $img . '" alt="">
                                    <a href="">' . $name . '</a>
                                    <p>' . $price . ' vnđ</p>
                                    <p>Mã sản phẩm: </p>
                                    <a href=""><button class="click">Xem chi tiết</button></a>
                                    <button class="click">Thêm Giỏ Hàng</button>
                                </div>
                            </div>');
            }
            ?>
            <!-- <div class="col-3">
                <div class="sanpham">
                    <img src="view/images/Laptop ASUS TUF Gaming A15 FA507NU-LP131W .jpg" alt="">
                    <a href="">Tên sản phẩm</a>
                    <p>Giá sản phẩm: </p>
                    <p>Mã sản phẩm: </p>
                    <a href=""><button class="click">Xem chi tiết</button></a>
                    <button class="click">Thêm Giỏ Hàng</button>
                </div>
            </div> -->
        </div>


        <h1>Sản phẩm bán chạy</h1>
        <div class="row">
            <?php
            extract($Products);
            foreach ($Products as $Pr) {
                extract($Pr);

                echo ('<div class="col-3">
                                <div class="sanpham">
                                    <img src="view/images/' . $img . '" alt="">
                                    <a href="">' . $name . '</a>
                                    <p>' . $price . ' vnđ</p>
                                    <p>Mã sản phẩm: </p>
                                    <a href=""><button class="click">Xem chi tiết</button></a>
                                    <button class="click">Thêm Giỏ Hàng</button>
                                </div>
                            </div>');
            }
            ?>
        </div>
    </div>
</div>
<img src="view/images/banner/banner_1.jpg" alt="" class="banner mg-t-20">
</div>