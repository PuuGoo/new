<style>
    .custom-form {
        max-width: 900px;
        margin: 10px auto;
        padding: 50px 68px 50px 50px;

        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .custom-span {
        display: block;
        margin-bottom: 5px;
        color: #495057;
    }

    .custom-input,
    .custom-textarea {
        width: 100%;
        padding: 8px;
        outline: none;
        margin-bottom: 10px;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }

    .custom-button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .custom-button:hover {
        background-color: #0056b3;
    }

    .custom-span:last-child {
        float: right;
        cursor: pointer;
        color: #6c757d;
        font-size: 18px;
    }

    .custom-span:last-child:hover {
        color: #343a40;
    }
    .btn_inp {
        padding: 10px 20px;
        outline: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        border: none;
    }
    .soluong{
        width:100px;
        height:20px;
        margin-bottom: 20px;
    }
</style>
</head>

<body>
    <?php

    ?>
    <form class="custom-form" action="index.php?act=editProduct" method="post" enctype="multipart/form-data">
        <input type="hidden" name="idPro" value="<?=$product['id']?>">
        
        <span class="custom-span">Tên danh mục</span>
        <input class="custom-input" type="text" name="name" value="<?= $product['name'] ?>"><br>

        <label for="">Hình ảnh</label>
        <input <?=$product['image']!='' ? '' : 'required'?> type="file" name="image" class="input"><br>

        <span class="custom-span">Mô tả</span> 
        <textarea class="custom-textarea" name="description" cols="30" rows="10"><?=$product['description'] ?></textarea> <br>

        <label for="">Giá</label>
        <input type="text" name="price" class="input" value="<?= $product['price'] ?>"><br>

        <span>Danh mục</span> <br>
        <select name="categories_id" class="select">
                    <?php
                        if(isset($categories)&& count($categories)>0){
                            foreach ($categories as $category) {
                                echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                            }
                        }
                    ?>
                </select> <br>

        <span>Số lượng</span> <br>
        <input class="soluong" type="number" name="quantity" id="" min="1" max="10" value="<?= $product['quantity'] ?>"> <br>
        <input type="hidden" name="oldImage" value="<?=$product['image']?>">
        <input class="btn_inp" type="submit" name="suasp" value="Sửa Ngay"> 
    </form>