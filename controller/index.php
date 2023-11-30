<?php
session_start();
ob_start();

require "model/connect.php";
require "model/product.php";
require "model/user.php";
include "model/order.php";
include "model/category.php";



include "view/header.php";

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
    case 'lichsu':
        $lsdh= all_oder() ;
        include 'view/lichsu.php';
        break;
    case "binhluan":
        if (isset($_POST['submit'])) {
            $_SESSION['user'];
            $productId = isset($_POST['id']) ? (int) $_POST['id'] : 0;
            $comment = isset($_POST['noidung']) ? (int) $_POST['noidung'] : 0;
            $userId = isset($_SESSION['user']) ? $_SESSION['user'] : 0;


            if ($productId && $userId) {
                $addCmt($userId, $productId, $comment);
                $comment = getAllcmt($userId, $productId, $comment);
                header('location: index.php?act=chitietsp?id=' . $productId);
            }
        }
        include 'binhluan.php';
        break;
        case 'pay':
            if (isset($_POST['thanh_toan'])) {
                addOrder();
            }
            include 'view/pay.php';
            break;
        case "vnpay":
            include "vnpay/index.php";
            break;
        case "momo":
            include "view/momo.php";
            break;
        case "thanhtoan":

            include "view/thanhtoan.php";
            break;
        case "quenmk":
            if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {
                $email = $_POST['email'];
                $checkmail = checkemail($email);
                if (is_array($checkmail)) {
                    $thongbao = "<p style='font-size: 16px;color: red;padding: 10px 0;'> Mật khẩu của bạn là: " . $checkmail['password'] . "</p>";
                } else {
                    $thongbao = "<p style='font-size: 16px;color: red;padding: 10px 0;'> Email này không tồn tại!</p>";
                }
            }
            include "view/quenmk.php";
            break;
        case "updateUser":
            if (isset($_POST['btn-update'])) {
                $id = $_POST['id'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $shipping_address = $_POST['shipping_address'];
                $shipping_city = $_POST['shipping_city'];
                $billing_address = $_POST['billing_address'];
                $billing_city = $_POST['billing_city'];
                $update = updateUser($email, $username, $password,  $fullname, $phone, $shipping_address, $shipping_city, $billing_address, $billing_city, $id);

                header('location: index.php');
            }

            include 'view/updateUser.php';
            break;
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $shipping_address = $_POST['shipping_address'];
                $shipping_city = $_POST['shipping_city'];
                $billing_address = $_POST['billing_address'];
                $billing_city = $_POST['billing_city'];
                $getuser = addUser($email, $username, $password, $fullname, $phone, $shipping_address, $shipping_city, $billing_address, $billing_city);
            }
            include "view/dangky.php";
            break;
        case 'dangxuat':
            unset($_SESSION['user']);
            header('location: index.php');
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $user = login($username, $password);
                if ($user) {
                    if ($user['is_admin'] == 1) {
                        $_SESSION['user'] = $user;
                        header('location: admin/index.php');
                    } else {
                        $_SESSION['user'] = $user;
                        header('location: index.php');
                    }
                }
            }
            include 'view/dangnhap.php';
            break;
        case 'sanpham':
            $dsdm = get_all_dm();
            if (!isset($_GET['id'])) {
                $iddm = 0;
            } else {
                $iddm = $_GET['id'];
            }
            $dssp = get_all_dm_sp($kyw,$iddm, 12);
            include 'view/sanpham.php';
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'delCart':
            //lấy giá trị
            $id = $_GET['id'];
            deleteCart($id);
            include "view/cart.php";
            break;
        case 'cart':
            if (isset($_POST['dathang']) && ($_POST['dathang'])) {
                //lấy giá trị
                $img = $_POST['img'];
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $id = $_POST['id'];
                $soLuong = $_POST['soluong'];

                //add vào giỏ hàng
                if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();

                if (isset($_SESSION['cart'][$id])) {
                    $_SESSION['cart'][$id]['quantity'] += $soLuong;
                } else {
                    $_SESSION['cart'][$id] = array("img" => $img, "name" => $tensp, "quantity" => $soLuong, "price" => $gia);
                }
            }
            include "view/cart.php";
            break;
        case "chitietsp":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $product = getOneProduct($_GET['id']);
            }
            include "view/chitietsp.php";
            break;
        case "shop":
            $dsdm = get_all_dm();
            if (!isset($_GET['id'])) {
                $iddm = 0;
            } else {
                $iddm = $_GET['id'];
            }
            if(isset($_POST['timkiem'])&&($_POST['timkiem'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $dssp = get_all_dm_sp($kyw,$iddm, 12); //$iddm,12
            include "view/shop.php";
            break;
        default:

            $getallsp = sp_all();
            include "view/home.php";
            break;
    }
} else {

    $getallsp = sp_all();
    include "view/home.php";
}

include "view/footer.php";
