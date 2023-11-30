<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="layout/css/style.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Admin</title>
</head>

<body>

	<body>

		<div id="mySidenav" class="sidenav">
			<p class="logo"><span>A</span>dmin</p>
			<a href="index.php" class="icon-a"><i class="fa fa-dashboard icons"></i> <span>Bảng Điều Khiển</span> </a>
			<a href="index.php?act=categories" class="icon-a"><i class="fa fa-folder-open icons"></i> <span>Quản Lý Danh Mục</span></a>
			<a href="index.php?act=products" class="icon-a"><i class="fa fa-folder-plus icons"></i> <span>Quản Lý Sản Phẩm</span></a>
			<a href="index.php?act=order" class="icon-a"><i class="fa fa-shopping-bag icons"></i> <span>Quản Lý Đơn hàng</span></a>
			<a href="index.php?act=user" class="icon-a"><i class="fa fa-user icons"></i> <span>Quản Lý Thành Viên</span></a>
			<p class="logout"><a href="index.php?act=dangxuat"><i class="fa-solid fa-right-from-bracket"></i> <span>Đăng Xuất</span></a></p>
		</div>
		<div id="main">
			<div class="head">
				<div class="col-div-6">
					<span style="font-size:30px;cursor:pointer; color: #342E37;" class="nav">☰ Bảng Điều Khiển</span>
					<span style="font-size:30px;cursor:pointer; color: #342E37;" class="nav2">☰ Bảng Điều Khiển</span>
				</div>

				<div class="col-div-6">
					<div class="profile">

						<img src="layout/images/user.png" class="pro-img" />
						<p> <?php
							if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                                echo ' <p>'. $_SESSION['user']['username'] .'</p>';
                            } else {
                                echo '<p>Admin</p>';
                            }
                            ?></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="clearfix"></div>
			<br />