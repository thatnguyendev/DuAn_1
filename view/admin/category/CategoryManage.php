<div class="container-fluid">
    <div class="row">
        <div class="container mt-3">
            <h1 class="mb-3">Quản lý category</h1>
            <div class="row" id="product-container"></div>
            <!-- FORM NHẬP SẢN PHẨM -->
            <form action="admin.php?act=add_category" method="post">
                Mã loại: <input type="text" name="maLH" id="id"><br><br>
                Name: <input type="text" name="name" id="name"><br><br>
                <input type="submit" name="them" value="thêm">
            </form>


            <table border="1" class="mt-3">
                <thead>
                    <tr>
                        <th class="border-1 col-2">Stt </th>
                        <th class="border-1 col-4">Mã LH</th>
                        <th class="border-1 col-4">Name</th>
                        <th class="border-1 col-2">Chức năng</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    };

                    $i = 1;

                    extract($listCategory);
                    foreach ($listCategory as $category) {
                        extract($category);
                        echo ('<tr>
                                    <td class="border-1">' . $i . '</td>
                                    <td class="border-1">' . $maLH . '</td>
                                    <td class="border-1">' . $name . '</td>
                                    <td class="border-1 text-decoration-none">
                                        <a href="admin.php?act=edit_category&id=' . $maLH . '"
                                            class="text-decoration-none"><button>Sửa</button></a>
                                        <a href="admin.php?act=delete_category&id=' . $maLH . '"
                                            class="text-decoration-none"><button>Xóa</button></a>
                                    </td>
                                </tr>');
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>



    <hr class="mt-5">
</div>