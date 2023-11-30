<?php

$html_dm='';
foreach ($dsdm as $dm) {
 extract($dm);
 $link='index.php?act=shop&id='.$id;
 $html_dm .='<a class="dropdown-item " href="'.$link.'">'.$name.'</a> ';
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
                    <?=$html_dm?>

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
        <h1 class="font-weight-semi-bold text-uppercase mb-3 text-h1">Cửa Hàng</h1>

    </div>
</div>
<!-- Page Header End -->


<!-- Shop Start -->
<div class="container-fluid pt-5 yp-51">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-12">
            <!-- Price Start -->
            <div class="border-bottom mb-4 pb-4">
                <h5 class="font-weight-semi-bold mb-4">Lọc Theo Giá</h5>
                <form>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" checked id="price-all">
                        <label class="custom-control-label" for="price-all">All Price</label>
                        <span class="badge border font-weight-normal">1000</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-1">
                        <label class="custom-control-label" for="price-1">$0 - $100</label>
                        <span class="badge border font-weight-normal">150</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-2">
                        <label class="custom-control-label" for="price-2">$100 - $200</label>
                        <span class="badge border font-weight-normal">295</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-3">
                        <label class="custom-control-label" for="price-3">$200 - $300</label>
                        <span class="badge border font-weight-normal">246</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-4">
                        <label class="custom-control-label" for="price-4">$300 - $400</label>
                        <span class="badge border font-weight-normal">145</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="price-5">
                        <label class="custom-control-label" for="price-5">$400 - $500</label>
                        <span class="badge border font-weight-normal">168</span>
                    </div>
                </form>
            </div>
            <!-- Price End -->
            <div class="border-bottom mb-4 pb-4 locdm nav-item dropdown">
                <h5 class="font-weight-semi-bold mb-4  ">Lọc Theo Danh Mục</h5>
                <?=$html_dm?>
            </div>
        </div>
        <!-- Shop Sidebar End -->
        


        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-12">
            <div class="row pb-3">
                <div class="col-12 pb-1">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    <form action="index.php?act=shop"  method="post">
                                 <div class="input-group">
                                 
                                     <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm theo tên..."  >
                                     <div class="input-group-append">
                                         <span class="input-group-text bg-transparent text-primary">
                                           <input class="kyw-search " type="submit" name="timkiem" value="Tìm kiếm">
                                         </span>
                                     </div>
                                    
                                 </div>
                             </form>
                            
                        <div class="dropdown ml-4">
                            <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sắp Xếp Theo
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="#">Phổ biến</a>
                                <a class="dropdown-item" href="#">Đánh giá</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                        
                        foreach ($dssp as $sp) : 
                            echo '
                        <form action="index.php?act=cart" method="post" class="col-lg-4 col-md-6 col-sm-12 pb-1">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100 h-80 " src="layout/img/'.$sp['image'].'" alt="">
                                </div>
                                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                    <h6 class="text-truncate mb-3">'.$sp['name'].'</h6>
                                    <div class="d-flex justify-content-center">
                                        <h6>$'.$sp['price'].'</h6>
                                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                    </div>
                                </div>
                                <input type="hidden" name="img" value="'.$sp['image'].'">
                                <input type="hidden" name="tensp" value="'.$sp['name'].'">
                                <input type="hidden" name="gia" value="'.$sp['price'].'">
                                <input type="hidden" name="id" value="'.$sp['id'].'">
                                <input type="hidden" class="inpnumber" name="soluong"  value="1">
                                <div class="card-footer d-flex justify-content-between bg-light border">
                                    <a href="index.php?act=chitietsp&id='.$sp['id'].'" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi Tiết</a>
                                    <button type="submit" name="dathang" value="Đặt hàng" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm Giỏ Hàng</button>
                                </div>
                            </div>
                        </form>';
                        endforeach;
                    ?>
                
                
            
                
                <div class="col-12 pb-1">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center mb-3">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->