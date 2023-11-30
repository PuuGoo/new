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
        <h1 class="font-weight-semi-bold text-uppercase mb-3 text-h1 ">Thanh Toán</h1>

    </div>
</div>
<!-- Page Header End -->
<!-- Checkout Start -->
<div class="container-fluid pt-5 yp-51">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div class="mb-4">
                <h4 class="font-weight-semi-bold mb-4">Địa Chỉ Thanh Toán</h4>
                <div class="row">
                    <?php if ((isset($_SESSION['user'])) && ($_SESSION['user'] != '')) { ?>

                        <div class="col-md-6 form-group">
                            <label>Họ Và Tên</label>
                            <input class="form-control" type="text" placeholder="" value='<?= $_SESSION['user']['full_name'] ?>'>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" value='<?= $_SESSION['user']['email'] ?>'>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" type="text" value='<?= $_SESSION['user']['phone'] ?>'>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Dòng địa chỉ 1</label>
                            <input class="form-control" type="text" value='<?= $_SESSION['user']['billing_address'] ?>'>
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Quốc gia</label>
                            <select class="custom-select">
                                <option selected>Việt Nam</option>
                                <option>Lao</option>
                                <option>Campuchia</option>
                                <option>Thái Lan</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Thành phố</label>
                            <input class="form-control" type="text" value='<?= $_SESSION['user']['billing_city'] ?>'>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Tình trạng</label>
                            <input class="form-control" type="text" placeholder="Tình trạng">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mã bưu điện</label>
                            <input class="form-control" type="text" placeholder="123">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Tạo một tài khoản</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto" data-toggle="collapse" data-target="#shipping-address">Gửi đến địa chỉ khác</label>
                            </div>
                        </div>
                </div>
            </div>
            <div class="collapse mb-4" id="shipping-address">
                <h4 class="font-weight-semi-bold mb-4">Địa chỉ giao hàng</h4>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Họ</label>
                        <input class="form-control" type="text" placeholder="Họ">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Tên</label>
                        <input class="form-control" type="text" placeholder="Tên">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text" placeholder="example@email.com">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" type="text" placeholder="+123 456 789">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Dòng địa chỉ 1</label>
                        <input class="form-control" type="text" placeholder="123 Street">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Dòng địa chỉ 2</label>
                        <input class="form-control" type="text" placeholder="123 Street">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Quốc gia</label>
                        <select class="custom-select">
                            <option selected>Việt Nam</option>
                            <option>Afghanistan</option>
                            <option>Albania</option>
                            <option>Algeria</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Thành Phố</label>
                        <input class="form-control" type="text" placeholder="Hồ Chí Minh">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Tình trạng</label>
                        <input class="form-control" type="text" placeholder="Hồ Chí Minh">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Mã bưu điện</label>
                        <input class="form-control" type="text" placeholder="123">
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="col-md-6 form-group">
                            <label>Họ Và Tên</label>
                            <input class="form-control" type="text" placeholder="Nhập Họ Tên">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="Nhập E-mail">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" type="text" placeholder="Nhập Số Điện Thoại">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Dòng địa chỉ 1</label>
                            <input class="form-control" type="text" placeholder="Nhập Dòng Địa Chỉ 1">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Quốc gia</label>
                            <select class="custom-select">
                                <option selected>Việt Nam</option>
                                <option>Lao</option>
                                <option>Campuchia</option>
                                <option>Thái Lan</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Thành phố</label>
                            <input class="form-control" type="text" placeholder="Thành Phố">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Tình trạng</label>
                            <input class="form-control" type="text" placeholder="Tình trạng">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mã bưu điện</label>
                            <input class="form-control" type="text" placeholder="123">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Tạo một tài khoản</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto" data-toggle="collapse" data-target="#shipping-address">Gửi đến địa chỉ khác</label>
                            </div>
                        </div>
                </div>
            </div>
            <div class="collapse mb-4" id="shipping-address">
                <h4 class="font-weight-semi-bold mb-4">Địa chỉ giao hàng</h4>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Họ</label>
                        <input class="form-control" type="text" placeholder="Họ">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Tên</label>
                        <input class="form-control" type="text" placeholder="Tên">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text" placeholder="example@email.com">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" type="text" placeholder="+123 456 789">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Dòng địa chỉ 1</label>
                        <input class="form-control" type="text" placeholder="123 Street">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Dòng địa chỉ 2</label>
                        <input class="form-control" type="text" placeholder="123 Street">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Quốc gia</label>
                        <select class="custom-select">
                            <option selected>Việt Nam</option>
                            <option>Afghanistan</option>
                            <option>Albania</option>
                            <option>Algeria</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Thành Phố</label>
                        <input class="form-control" type="text" placeholder="Hồ Chí Minh">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Tình trạng</label>
                        <input class="form-control" type="text" placeholder="Hồ Chí Minh">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Mã bưu điện</label>
                        <input class="form-control" type="text" placeholder="123">
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <form action="index.php?act=pay" method="post" class="col-lg-4">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Tổng Đơn Hàng</h4>
                </div>
                <div class="card-body ">
                    <h5 class="font-weight-medium mb-3">Sản Phẩm</h5>

                    <?php
                    $total = 0;
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $id => $item) {
                            $price = $item['price'] * $item['quantity'];
                            $total += $price;
                            echo '
                                <div class="d-flex justify-content-between">
                                <span class="nameandquantity">
                                    <p>' . $item['name'] . ' </p>
                                    <p >x ' . $item['quantity'] . '</p></span>
                                    
                                    
                                    <p>$' . $item['price'] . '</p>
                                </div>
                                ';
                        }
                    }
                    ?>


                    <hr class="mt-0">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Tổng phụ</h6>
                        <h6 class="font-weight-medium">$0</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Phí giao hàng</h6>
                        <h6 class="font-weight-medium">$0</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Tổng</h5>
                        <h5 class="font-weight-bold">$<?= $total ?></h5>
                    </div>
                </div>
            </div>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Phương thức</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="custom-control custom-radio">

                            <input type="radio" class="custom-control-input" name="payment" id="paypal">
                            <label class="custom-control-label" for="paypal">Thanh Toán Paypal</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                            <label class="custom-control-label" for="directcheck">Thanh Toán Tiền mặt</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                            <label class="custom-control-label" for="banktransfer">Thanh Toán Momo</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <a href="index.php?act=pay" class="dongydathang"><button name="thanh_toan" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Đặt Hàng</button></a>
                </div>
            </div>
        </form>
        </div>
    </div>
    <style>

    </style>

    <!-- Checkout End -->