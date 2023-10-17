<?php
    session_start();
    include 'main/model/pdo.php';
    include 'main/model/sanpham.php';
    include 'main/model/danhmuc.php';
    include "view/header.php";
    include "global.php";
    include "main/model/taikhoan.php";

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

    $dsdm = loadall_danhmuc_home();
    $spnew = loadall_sanpham_home();
    $themostview = loadall_sanpham_themostview();


    if(isset($_GET['act']) && ($_GET['act']!="" )){
        $act = $_GET['act'];
        switch($act){          
            case 'sanpham':
                if(isset($_POST['kyw']) && ($_POST['kyw']!="" )){
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm'] > 0 )){
                    $iddm = $_GET['iddm'];
                    
                } else {
                    $iddm = 0;
                }               
                $dssp = loadall_sanpham($kyw, $iddm);
                $tendm = load_ten_danhmuc($iddm);      
                include "view/sanpham.php";
                break;

            case 'gioithieu':
                include "view/gioithieu.php";
                break;

            case 'lienhe':
                include "view/lienhe.php";
                break;
            
            case 'dangky':
                if(isset($_POST['dangky']) && $_POST['dangky']){                 
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    insert_taikhoan($user,$pass,$email);
                    $thongbao = "đã đăng kí thành công . Vui lòng đăng nhập để thức hiện bình luật hoặc đặt hàng ";
                }
                include "view/taikhoan/dangky.php";
                break;
            
            case 'dangnhap':
                if(isset($_POST['dangnhap']) && $_POST['dangnhap']){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user'] = $checkuser;
                        header('Location:index.php');
                        //$thongbao = "bạn đã đăng nhập thành công ";
                    } else {
                        $thongbao = " tài khoản không tồn tại vui long kiểm tra hoặc đăng kí";            
                    }                  
                }
                include "view/taikhoan/dangky.php";
                break;

            case 'edit_taikhoan':
                if(isset($_POST['capnhat']) && $_POST['capnhat']){
                    $id = $_POST['id'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    
                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    $_SESSION['user'] = checkuser($user,$pass);
                    header('Location:index.php?act=edit_taikhoan');                  
                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            
            case 'quenmk':
                if(isset($_POST['guiemail']) && $_POST['guiemail']){
                    $email = $_POST['email'];
                     
                    $checkemail = checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao = "mật khẩu của bạn là " .$checkemail['pass'];                     
                    } else {
                        $thongbao = "email này không tồn tại";
                    }
                }
                include "view/taikhoan/quenmk.php";
                break;

            case 'sanphamct':    
                if(isset($_GET['idsp']) && ($_GET['idsp'] > 0 )){
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sp_cungloai = load_sanpham_cungloai($id,$id_danhmuc);   
                   
                    include "view/sanphamct.php";
                } else {
                    include "view/home.php";
                }               
                break;

            case 'addtocart':
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $soluong = 1;
                    $ttien = $soluong * $price;
                    $spadd =[$id,$name,$img,$price,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                }
                include "view/cart/viewcart.php";
                break;
            
                case 'delcart':
                    if (isset($_GET['idcart'])) {
                        array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                    } else {
                        $_SESSION['mycart'] = [];
                    }
                    header('Location:' . $_SERVER['HTTP_REFERER']);
                    //include "view/cart/viewcart.php";
                    break;
            

            case 'thoat':
                session_unset();
                header('location:index.php');
                break;
            
            default:
                include "view/home.php";
                break;
    }
    } else {
        include "view/home.php";
    }
    include "view/footer.php";
?>