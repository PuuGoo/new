            <!-- Phần chính -->

            <div class="container_table">
                <div class="addnew">
                    <a class="addspnew" href="#">Thêm Sản Phẩm</a>
                </div>
                <table class="table_form">
                    <tr>
                        <th class="thead">#</th>
                        <th class="thead">Tên sản phẩm</th>
                        <th class="thead">Hình ảnh</th>
                        <th class="thead">Giá</th>
                        <th class="thead">Thao Tác</th>
                    </tr>

                    <?php
                    if (isset($products) && count($products)) {
                        foreach ($products as $product) {
                            echo '<tr>
                            <td class="tbody">' . $product['id'] . '</td>
                            <td class="tbody">' . $product['name'] . '</td>
                            <td class="tbody"><img src="../layout/img/' . $product['image'] . '" alt=""></td>
                            <td class="tbody">' . $product['price'] . '</td>
                            <td class="tbody"><a href="index.php?act=delProduct&id=' . $product['id'] . '"> Xóa</a> - 
                            <a href="index.php?act=editProduct&id=' . $product['id'] . '">Sửa</a></td>
                        </tr>';
                        }
                    }
                    ?>



                </table>
                <div class="clearfix"></div>

            </div>
            <form action="index.php?act=addProducts" class="forms" method="post" enctype="multipart/form-data">
                <h1 class="title">Nhập sản phẩm</h1>
                <label for="">Tên sản phẩm</label>
                <input type="text" name="name" placeholder="Nhập tên sản phẩm.." class="input"><br>
                <label for="">Hình ảnh</label>
                <input type="file" name="image" class="input"><br>
                <label for="">Mô tả</label>
                <textarea required id="description" name="description" rows="4" cols="50"></textarea>
                <label for="">Giá</label>
                <input type="text" name="price" placeholder="Nhập giá sản phẩm...." class="input"><br>
                <label for="">Danh mục</label>
                <select name="categories_id" class="select">
                    <?php
                    if (isset($categories) && count($categories) > 0) {
                        foreach ($categories as $category) {
                            echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>';
                        }
                    }
                    ?>
                </select>
                <label for="">Số lượng</label>
                <input type="number" name="quantity" id="" min="1" max="10">
                <button class="button" name="themsp">Thêm sản phẩm</button>
                <span class="close">X</span>
            </form>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="js/main.js"></script>

            <script>
                $(".nav").click(function() {
                    $("#mySidenav").css('width', '70px');
                    $("#main").css('margin-left', '70px');
                    $(".logo").css('visibility', 'hidden');
                    $(".logo span").css('visibility', 'visible');
                    $(".logo span").css('margin-left', '-10px');
                    $(".icon-a").css('visibility', 'hidden');
                    $(".icons").css('visibility', 'visible');
                    $(".icons").css('margin-left', '-8px');
                    $(".nav").css('display', 'none');
                    $(".nav2").css('display', 'block');
                });

                $(".nav2").click(function() {
                    $("#mySidenav").css('width', '300px');
                    $("#main").css('margin-left', '300px');
                    $(".logo").css('visibility', 'visible');
                    $(".icon-a").css('visibility', 'visible');
                    $(".icons").css('visibility', 'visible');
                    $(".nav").css('display', 'block');
                    $(".nav2").css('display', 'none');
                });
            </script>

            </body>

            </body>

            </html>