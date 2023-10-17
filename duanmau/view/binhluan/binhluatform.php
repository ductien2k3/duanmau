<?php
    session_start();
    include "../../main/model/pdo.php";
    include "../../main/model/binhluan.php";

    $id_pro = $_REQUEST['id_pro'];

    $dsbl = loadall_binhluan($id_pro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css.css">
    <style>
        body{
            margin: 0;
        }
        *{
            font-size: 1.2vw;
            color: #333;
        }
        .binhluan table {
            width: 100%;
        }
        .binhluan table td:nth-child(1) {
            width: 50%;
        }
        .binhluan table td:nth-child(2) {
            width: 20%;
        }
        .binhluan table td:nth-child(3) {
            width: 30%;
        }
    </style>
</head>
<body>
<div class="mb">
    <div class="box_title">Bình Luận</div>
        <div class="box_content2 product_portfolio binhluan">
        <table>
      
                <?php
                    foreach ($dsbl as $bl){
                        extract($bl);
                
                        echo '<tr><td>'.$noi_dung.'</td>';
                        echo '<td>'.$id_user.'</td>';
                        echo '<td>'.$ngay_bl.'</td></tr>';
                    }
                ?>
  
        </table>  

        </div>
            <div class="box_search binhluanform">
            <?php
            if (!isset($_SESSION['user'])) {
                // Display a message to the user
                echo '<p>Bạn phải đăng nhập để bình luận.</p>';
            } else {
            ?>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <input type="hidden" name="id_pro" value="<?=$id_pro?>">
        
                <input type="text" name="noi_dung" id="" placeholder="bình luận">
                <input type="submit" name="guibinhluan" value="bình luận">
                </form>
            </div>
            <?php
                if(isset($_POST['guibinhluan'])&& $_POST['guibinhluan']){
                    $noi_dung = $_POST['noi_dung'];
                    $id_user = $_SESSION['user']['id'];
                    $id_pro = $_POST['id_pro'];
                    $ngay_bl = date('h:i:sa d/m/y');
                    insert_binhluan($noi_dung,$id_user,$id_pro,$ngay_bl);
                    header('location:'.$_SERVER['HTTP_REFERER']);
                }
            }
            ?>
</div>
</body>
</html>