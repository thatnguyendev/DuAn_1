<section class="container-fluid">
    <div class="container">
        <div class="row">

            <div class="log_in">
                <form action="index.php?act=register" class="form" id="form-register" method="post">
                    <h1 class="text-align-center">ĐĂNG KÝ TÀI KHOẢN</h1>
                    <h1>
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo "<h2 style='color: red;'>$thongbao</h2>";
                        };
                        ?>
                    </h1>
                    <div class="mg-t-20">
                        <label for="">Last name</label><br>
                        <input type="text" name="name" id="name" class="form-control" placeholder="  Nhập họ và tên">
                    </div>

                    <div class="mg-t-20">
                        <label for="">Password</label><br>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="  Nhập password">
                    </div>

                    <div class="mg-t-20">
                        <label for="">Phone</label><br>
                        <input type="text" name="phone" id="phone" class="form-control"
                            placeholder="  Nhập số điện thoại">
                    </div>

                    <div class="mg-t-20">
                        <label for="">Email</label><br>
                        <input type="text" name="email" id="email" class="form-control" placeholder="  Nhập email">
                    </div>

                    <input type="submit" value="Đăng ký" name="dangky" class="mg-t-20">


                    <div class="mg-t-20 mg-b-20 text-align-center">
                        <a href="index.php?act=log_in" style="font-family: Arial; color: rgb(0, 30, 255);">Đăng nhập</a>
                        |
                        <a href="" style="font-family: Arial; color: rgb(0, 30, 255);">Quên mật khẩu</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>