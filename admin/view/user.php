  <!-- Phần chính -->

  <div class="container_table">
                <div class="addnew">
                    <a class="addspnew" href="#">Thêm Thành viên</a>
                </div>
                <table class="table_form">
                    <tr>
                        <th class="thead">#</th>
                        <th class="thead">Tên đăng nhập</th>
                        <th class="thead">Họ và tên</th>
                        <th class="thead">Mật Khẩu</th>
                        <th class="thead">Email</th>
                        <th class="thead">Thao Tác</th>
                    </tr>
                    
                    <?php
                        if(isset($users)){
                            foreach ($users as $user) {
                                ?>
                                 <tr>
                                    <td class="tbody"><?=$user['id']?></td>
                                    <td class="tbody"><?=$user['username']?></td>
                                    <td class="tbody"><?=$user['full_name']?></td>
                                    <td class="tbody"><?=$user['password']?></td>
                                    <td class="tbody"><?=$user['email']?></td>
                                    <td class="tbody"><a href="index.php?act=delUser&id=<?=$user['id']?>"> Xóa</a> - 
                                    <a href="index.php?act=updateUser&id=<?=$user['id']?>">Sửa</a></td>
                                </tr>
                                <?php
                            }
                        }

                    ?>
                   
                </table>
                <div class="clearfix"></div>
            </div>
            <form action="index.php?act=addUser" class="forms" method="post">
                <h1 class="title">Nhập Thành Viên</h1>
                <label for="">Tên đăng nhập</label>
                <input type="text" name="username" placeholder="Nhập tên đăng nhập.." class="input"><br>
                <label for="">Mật khẩu</label>
                <input type="password" name="password" placeholder="Nhập mật khẩu.." class="input"><br>
                <label for="">Họ tên</label>
                <input type="text" name="full_name" placeholder="Nhập họ tên.." class="input"><br>
                <label for="">Số điện thoại</label>
                <input type="text" name="phone" placeholder="Nhập số điện thoại.." class="input"><br>
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Nhập email.." class="input"><br>
                <button class="button" name="addUser">Thêm mới</button>
                <span class="close">X</span>
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/main.js"></script>

        <script>

            $(".nav").click(function () {
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

            $(".nav2").click(function () {
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