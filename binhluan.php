<?php
session_start();
include 'model/connect.php';
include 'model/comment.php';
include 'model/product.php';

//print_r(var_dump($_SESSION['objuser']));

if (isset($_POST['gui'])) {
    $idsp = $_POST['idsp'];
    $nd = $_POST['noidung'];
    addCmt($_SESSION['user']['id'], $idsp, $nd);
}



$showbl = getAllcmt();
$html = "";



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/css/style.css">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
        foreach ($showbl as $bl) {
            $html .= '<div class="media mb-4">
                    <img src="layout/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                        <h6>' . $_SESSION['user']['full_name'] . '<small> - <i>01 Jan 2045</i></small></h6>
                            <p>' . $bl['comment'] . '</p>
                        </div>
                    </div>';
        }

    ?>

        <div class="row">
            <div class="col-md-6" style="overflow: auto; max-height: 450px; height: auto; ">
                <?php

                echo $html;
                ?>
            </div>
            <div class="col-md-6">
                <h4 class="mb-4">Bình luận</h4>
                <form action="binhluan.php" method="post">
                    <input type="hidden" name="idsp" id="idsp" value="<?php echo $idsp; ?>">

                    <div class="form-group">
                        <label for="message">Your Review *</label>
                        <textarea id="message" name="noidung" cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="form-group mb-0">
                        <input type="submit" name="gui" value="Leave Your Review" class="btn btn-primary px-3">
                    </div>
                </form>
            </div>

        </div>
    <?php  } else {

    ?>
        <a href='index.php?act=dangnhap' target='_parent'>Vui lòng đăng nhập!</a>
    <?php }  ?>
</body>

</html>