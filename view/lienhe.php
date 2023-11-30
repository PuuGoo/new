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
<div class="container-fluid bg-secondary mb-five">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3 text-h1">Liên Hệ</h1>
            
        </div>
    </div>
    <!-- Page Header End -->



 <!-- Contact Start -->
 <div class="container-fluid pt-5">
    
     <div class="row px-xl-5">
         <div class="col-lg-7 mb-five">
             <div class="contact-form">
                 <div id="success"></div>
                 <form name="sentMessage" id="contactForm" novalidate="novalidate">
                     <div class="control-group">
                         <input type="text" class="form-control" id="name" placeholder="Tên của bạn" required="required" data-validation-required-message="Please enter your name" />
                         <p class="help-block text-danger"></p>
                     </div>
                     <div class="control-group">
                         <input type="email" class="form-control" id="email" placeholder="Email của bạn" required="required" data-validation-required-message="Please enter your email" />
                         <p class="help-block text-danger"></p>
                     </div>
                     <div class="control-group">
                         <input type="text" class="form-control" id="subject" placeholder="Đối tượng" required="required" data-validation-required-message="Please enter a subject" />
                         <p class="help-block text-danger"></p>
                     </div>
                     <div class="control-group">
                         <textarea class="form-control" rows="6" id="message" placeholder="Tin nhắn" required="required" data-validation-required-message="Please enter your message"></textarea>
                         <p class="help-block text-danger"></p>
                     </div>
                     <div>
                         <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Gửi Tin Nhắn</button>
                     </div>
                 </form>
             </div>
         </div>
         <div class="col-lg-5 mb-five">
             <h5 class="font-weight-semi-bold mb-3">Liên Lạc</h5>
             <p>Cửa hàng thời trang độc đáo và phong cách với sứ mệnh mang lại sự tự tin và phong cách cho khách hàng.</p>
             <div class="d-flex flex-column mb-3">
                 <h5 class="font-weight-semi-bold mb-3">Chi nhánh 1</h5>
                 <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Quang Trung, Gò Vấp, TP. Hồ Chí Minh</p>
                 <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@gmail.com</p>
                 <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
             </div>
             <div class="d-flex flex-column">
                 <h5 class="font-weight-semi-bold mb-3">Chi nhánh 2</h5>
                 <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Tô Ký, Quận 12, TP. Hồ Chí Minh</p>
                 <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@gmail.com</p>
                 <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
             </div>
         </div>
     </div>
 </div>
 <!-- Contact End -->