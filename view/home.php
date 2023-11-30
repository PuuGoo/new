 <?php


    $dssp = get_all_sp();
    $dsdm = get_all_dm();
    $html_dm = '';
    foreach ($dsdm as $dm) {
        extract($dm);
        $link = 'index.php?act=home&id=' . $id;
        $html_dm .= '<a class="nav-item nav-link " href="' . $link . '">' . $name . '</a> ';
    }
    ?>

 <style>
     .input_search {
         position: absolute;
         top: 9%;
         width: 690px;
         right: 27.3%;
     }
 </style>
 <div class="col-lg-6 col-6 text-left input_search">
     <form action="">
         <div class="input-group">
             <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm...">
             <div class="input-group-append">
                 <span class="input-group-text bg-transparent text-primary">
                     <i class="fa fa-search"></i>
                 </span>
             </div>
         </div>
     </form>
 </div>

 <!-- Navbar Start -->
 <div class="container-fluid mb-5">
     <div class="row border-top px-xl-5">
         <div class="col-lg-3 d-none d-lg-block">
             <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                 <h6 class="m-0">Danh Mục</h6>
                 <i class="fa fa-angle-down text-dark"></i>
             </a>
             <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                 <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                     <!-- <div class="nav-item dropdown">
                         <a href="#" class="nav-link" data-toggle="dropdown">Áo sơ mi <i class="fa fa-angle-down float-right mt-1"></i></a>
                         <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                             <a href="" class="dropdown-item">Áo nam</a>
                             <a href="" class="dropdown-item">Áo nữ</a>
                             <a href="" class="dropdown-item">Áo trẻ em</a>
                         </div>
                     </div> -->
                     <?= $html_dm ?>
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
             <div id="header-carousel" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner">
                     <div class="carousel-item active" style="height: 410px;">
                         <img class="img-fluid" src="layout/img/carousel-3.jpg" alt="Image">
                         <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                             <div class="p-3" style="max-width: 700px;">
                                 <h4 class="text-light text-uppercase font-weight-medium mb-3">Giảm 10% Cho Đơn Hàng Đầu Tiên</h4>
                                 <h3 class="display-4 text-white font-weight-semi-bold mb-4">Áo Thun Thời Trang</h3>
                                 <a href="" class="btn btn-light py-2 px-3">Mua Ngay</a>
                             </div>
                         </div>
                     </div>
                     <div class="carousel-item" style="height: 410px;">
                         <img class="img-fluid" src="layout/img/carousel-2.jpg" alt="Image">
                         <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                             <div class="p-3" style="max-width: 700px;">
                                 <h4 class="text-light text-uppercase font-weight-medium mb-3">Giảm 10% Cho Đơn Hàng Đầu Tiên</h4>
                                 <h3 class="display-4 text-white font-weight-semi-bold mb-4">Giá Hợp Lý</h3>
                                 <a href="" class="btn btn-light py-2 px-3">Mua Ngay</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                     <div class="btn btn-dark" style="width: 45px; height: 45px;">
                         <span class="carousel-control-prev-icon mb-n2"></span>
                     </div>
                 </a>
                 <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                     <div class="btn btn-dark" style="width: 45px; height: 45px;">
                         <span class="carousel-control-next-icon mb-n2"></span>
                     </div>
                 </a>
             </div>
         </div>
     </div>
 </div>
 </div>
 <!-- Navbar End -->


 <!-- Products Start -->

 <div class="container-fluid pt-5">
     <div class="text-center mb-4">
         <h2 class="section-title px-5"><span class="px-2">Sản Phẩm Bán Chạy</span></h2>
     </div>
     <div class="row px-xl-5 pb-3">
         <?php

            foreach ($dssp as $sp) :
            ?>

             <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                 <div class="card product-item border-0 mb-4">
                     <form action="index.php?act=cart" method="post">
                         <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                             <img class="img-fluid w-100" src="layout/img/<?= $sp['image'] ?>" alt="">
                         </div>
                         <div class="card-body border-left border-right text-center ">
                             <h6 class="text-truncate mb-3"><?= $sp['name'] ?></h6>
                             <div class="d-flex justify-content-center align-center">
                                 <h6><?= $sp['price'] ?> <sup>đ</sup></h6>
                                 <h6 class="text-muted ml-2"><del><?= $sp['price']  ?> <sup>đ</sup></del></h6>

                             </div>
                             <input type="hidden" class="inpnumber" name="soluong" value="1">
                         </div>
                         <div class="card-footer d-flex justify-content-between bg-light border">
                             <a href="index.php?act=chitietsp&id=<?= $sp['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi Tiết </a>
                             <a href="" class="btn btn-sm text-dark p-0"></a>
                             <button type="submit" name="dathang" value="Đặt hàng" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm Giỏ Hàng</button>
                         </div>

                         <input type="hidden" name="img" value="<?= $sp['image'] ?>">
                         <input type="hidden" name="tensp" value="<?= $sp['name'] ?>">
                         <input type="hidden" name="gia" value="<?= $sp['price'] ?>">
                         <input type="hidden" name="id" value="<?= $sp['id'] ?>">
                     </form>
                 </div>
             </div>
         <?php endforeach; ?>

     </div>
 </div>
 <!-- Products End -->


 <!-- Offer Start -->
 <div class="container-fluid offer pt-5">
     <div class="row px-xl-5">
         <div class="col-md-6 pb-4">
             <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                 <img src="layout/img/offer-1.png" alt="">
                 <div class="position-relative" style="z-index: 1;">
                     <h5 class="text-uppercase text-primary mb-3">Giảm Giá 20% Cho Tất Cả Đơn Hàng</h5>
                     <h1 class="mb-4 font-weight-semi-bold">Bộ Sưu Tập Mùa Xuân</h1>
                     <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Mua Ngay</a>
                 </div>
             </div>
         </div>
         <div class="col-md-6 pb-4">
             <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                 <img src="layout/img/offer-2.png" alt="">
                 <div class="position-relative" style="z-index: 1;">
                     <h5 class="text-uppercase text-primary mb-3">Giảm Giá 20% Cho Tất Cả Đơn Hàng</h5>
                     <h1 class="mb-4 font-weight-semi-bold">Bộ Sưu Tập Mùa Đông</h1>
                     <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Mua Ngay</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Offer End -->



 <!-- Products Start -->
 <div class="container-fluid pt-5">
     <div class="text-center mb-4">
         <h2 class="section-title px-5"><span class="px-2">Sản Phẩm Bán Chạy</span></h2>
     </div>
     <div class="row px-xl-5 pb-3">
         <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
             <div class="card product-item border-0 mb-4">
                 <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                     <img class="img-fluid w-100" src="layout/img/product-1.jpg" alt="">
                 </div>
                 <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                     <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                     <div class="d-flex justify-content-center">
                         <h6>$123.00</h6>
                         <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                     </div>
                 </div>
                 <div class="card-footer d-flex justify-content-between bg-light border">
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
             <div class="card product-item border-0 mb-4">
                 <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                     <img class="img-fluid w-100" src="layout/img/product-2.jpg" alt="">
                 </div>
                 <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                     <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                     <div class="d-flex justify-content-center">
                         <h6>$123.00</h6>
                         <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                     </div>
                 </div>
                 <div class="card-footer d-flex justify-content-between bg-light border">
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
             <div class="card product-item border-0 mb-4">
                 <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                     <img class="img-fluid w-100" src="layout/img/product-3.jpg" alt="">
                 </div>
                 <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                     <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                     <div class="d-flex justify-content-center">
                         <h6>$123.00</h6>
                         <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                     </div>
                 </div>
                 <div class="card-footer d-flex justify-content-between bg-light border">
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
             <div class="card product-item border-0 mb-4">
                 <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                     <img class="img-fluid w-100" src="layout/img/product-4.jpg" alt="">
                 </div>
                 <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                     <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                     <div class="d-flex justify-content-center">
                         <h6>$123.00</h6>
                         <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                     </div>
                 </div>
                 <div class="card-footer d-flex justify-content-between bg-light border">
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
             <div class="card product-item border-0 mb-4">
                 <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                     <img class="img-fluid w-100" src="layout/img/product-5.jpg" alt="">
                 </div>
                 <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                     <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                     <div class="d-flex justify-content-center">
                         <h6>$123.00</h6>
                         <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                     </div>
                 </div>
                 <div class="card-footer d-flex justify-content-between bg-light border">
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
             <div class="card product-item border-0 mb-4">
                 <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                     <img class="img-fluid w-100" src="layout/img/product-6.jpg" alt="">
                 </div>
                 <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                     <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                     <div class="d-flex justify-content-center">
                         <h6>$123.00</h6>
                         <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                     </div>
                 </div>
                 <div class="card-footer d-flex justify-content-between bg-light border">
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
             <div class="card product-item border-0 mb-4">
                 <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                     <img class="img-fluid w-100" src="layout/img/product-7.jpg" alt="">
                 </div>
                 <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                     <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                     <div class="d-flex justify-content-center">
                         <h6>$123.00</h6>
                         <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                     </div>
                 </div>
                 <div class="card-footer d-flex justify-content-between bg-light border">
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
             <div class="card product-item border-0 mb-4">
                 <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                     <img class="img-fluid w-100" src="layout/img/product-8.jpg" alt="">
                 </div>
                 <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                     <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                     <div class="d-flex justify-content-center">
                         <h6>$123.00</h6>
                         <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                     </div>
                 </div>
                 <div class="card-footer d-flex justify-content-between bg-light border">
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                     <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Products End -->