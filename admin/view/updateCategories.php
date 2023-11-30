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
</style>
</head>

<body>
    <?php

    ?>
    <form class="custom-form" action="index.php?act=updateCategories" method="post">
        <input type="hidden" name="idCat" value="<?= $category['id'] ?>">
        <span class="custom-span">Tên danh mục</span>
        <input class="custom-input" type="text" name="tendm" value="<?= $category['name'] ?>"><br>

        <span class="custom-span">Vị trí</span>
        <input class="custom-input" type="number" name="vitridm" value="<?= $category['position'] ?>"><br>

        <span class="custom-span">Mô tả</span> <br>
        <textarea class="custom-textarea" name="motadm" cols="30" rows="10"><?= $category['description'] ?></textarea> <br>

        <input class="btn_inp" type="submit" name="suadm" value="Sửa Ngay">
    </form>