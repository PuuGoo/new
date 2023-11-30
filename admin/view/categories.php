<div class="container_table">
    <div class="addnew">
        <a class="addspnew" href="#">Thêm Danh Mục</a>
    </div>
    <table class="table_form">
        <tr>
            <th class="thead">#</th>
            <th class="thead">Tên Danh Mục</th>
            <th class="thead">Thao Tác</th>
        </tr>

        <?php
        if (isset($categories) && count($categories) > 0) {
            foreach ($categories as $category) {
                echo '<tr>
                    <td class="tbody">'.$category['id'].'</td>
                    <td class="tbody">'.$category['name'].'</td>
                    <td class="tbody"><a href="index.php?act=delCategories&id='.$category['id'].'"> Xóa</a> - 
                    <a href="index.php?act=updateCategories&id='.$category['id'].'">Sửa</a></td>
                </tr>';
            }
        }
        ?>
                
        

    </table>
    <div class="clearfix"></div>
</div>

<form action="index.php?act=addCategories" method="post" class="forms">
    <h1 class="title">Thêm Danh Mục</h1>
    <label for="">Tên danh mục</label>
    <input type="text" name="tendm" placeholder="Nhập tên danh mục.." class="input"><br>
    <label for="">Vị trí</label>
    <input type="number" name="vitridm" class="input">
    <label for="">Mô tả</label>
    <textarea name="motadm" id="" cols="30" rows="10"></textarea>

    <button class="button" name="themdm">Thêm mới</button>
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