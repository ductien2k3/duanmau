<?php
    session_start();
    include 'main/model/pdo.php';
    include 'main/model/sanpham.php';
    include 'main/model/danhmuc.php';
    include "view/header.php";
    include "global.php";
    include "main/model/taikhoan.php";

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
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
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
                    include "view/taikhoan/dangky.php";
                    break;
                }
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
            
            default:
                include "view/home.php";
                break;
    }
    } else {
        include "view/home.php";
    }
    include "view/footer.php";
?>