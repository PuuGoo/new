<?php
$dssp = get_all_sp();
$dsdm = get_all_dm();

?>


<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Danh Mục</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">Áo sơ mi <i class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="" class="dropdown-item">Áo nam</a>
                            <a href="" class="dropdown-item">Áo nữ</a>
                            <a href="" class="dropdown-item">Áo trẻ em</a>
                        </div>
                    </div> -->
                    <?php foreach ($dsdm as $dm) : ?>
                        <a href="" class="nav-item nav-link"><?= $dm['name'] ?></a>
                    <?php endforeach; ?>

                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>
                        <a href="index.php?act=shop" class="nav-item nav-link">Cửa Hàng</a>
                        <a href="index.php?act=lienhe" class="nav-item nav-link">Liên Hệ</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Khác</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="index.php?act=cart" class="dropdown-item">Giỏ Hàng</a>
                                <a href="index.php?act=thanhtoan" class="dropdown-item">Thanh Toán</a>
                            </div>
                        </div>

                    </div>
                    <div class="navbar-nav ml-auto py-0">
                    <?php
                            if (isset($_SESSION['user']) && ($_SESSION['user'] > 0)) {
                                echo ' <div class="nav-item dropdown" style= "display: flex; align-items: center;">
                                            <a href="#" class="nav-item nav-link" style=" padding: 10px 3px">' . $_SESSION['user']['username'] . '</a>
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style=" padding: 10px 3px" > 
                                            <img src="layout/img/user.jpg" alt="" style=" width: 40px; height: 40px" >
                                            </a>
                                            <div class="dropdown-menu rounded-0 m-0">
                                                <a href="index.php?act=updateUser" class="dropdown-item">Cập Nhật</a>
                                                <a href="index.php?act=lichsu" class="dropdown-item">Lịch Sử Đặt Hàng </a>
                                                <a href="index.php?act=dangxuat" class="dropdown-item">Đăng Xuất</a>
                                              
                                            </div>          
                                        </div>';
                            } else {
                                echo ' <a href="index.php?act=dangnhap" class="nav-item nav-link">Đăng Nhập</a>
                                <a href="index.php?act=dangky" class="nav-item nav-link">Đăng Ký</a>';
                            }
                            ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->


<!-- Page Header -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3 text-h1">Giỏ Hàng</h1>

    </div>
</div>
<!-- Page Header End -->


<!-- Cart Start -->
<div class="container-fluid pt-5 yp-51">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            

            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php
                    $total = 0;
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $id => $item) {

                            $price = $item['price'] * $item['quantity'];
                            $total += $price;
                            echo ' 
                            <tr>
                                <td class="align-middle"><img src="layout/img/'.$item['img'].'" alt="" style="width: 50px;"> '.$item['name'].'</td>
                                <td class="align-middle">$'.$item['price'].'</td>
                                <td class="align-middle">
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-minus" >
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control form-control-sm bg-secondary text-center" value="'.$item['quantity'].'">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">$'.$total.'</td>
                                <td class="align-middle"><button class="btn btn-sm btn-primary">
                                <a class="fa fa-times" href="index.php?act=delCart&id='.$id.'"</button></td>
                        </tr>';
                        }
                    }
                    ?>
                   


                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-5" action="">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Nhập mã giảm giá">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Nhập</button>
                    </div>
                </div>
            </form>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Tổng đơn hàng</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Giá</h6>
                        <h6 class="font-weight-medium">
                            <div><?= $total ?></div>
                        </h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Phí ship</h6>
                        <h6 class="font-weight-medium">$0</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Tổng</h5>
                        <h5 class="font-weight-bold">
                            <div>$<?= $total ?></div>
                        </h5>
                    </div>
                    <a class="dongydathang" href="index.php?act=thanhtoan"><button class="btn btn-block btn-primary my-3 py-3">ĐỒNG Ý ĐẶT HÀNG</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->