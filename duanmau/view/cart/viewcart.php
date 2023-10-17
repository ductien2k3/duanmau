<style>
table {
  width: 100%;
  border-collapse: collapse;
  border-radius: 5px;
  margin: 0 auto;
}

th, td {
  padding: 10px;
  text-align: center;
}

th {
  background-color: #ccc;
}

td {
  font-size: 14px;
}

.table tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
<main class="catalog  mb ">       
    <div class="boxleft">    
    <div class="mb">
        <div class="box_title">TÀI KHOẢN</div>
            <div class="box_content">
            <table class="table">
                <tr>
                    <th>Hình</th>
                    <th>Sản Phẩm</th>
                    <th>Đơn Giá</th>
                    <th>Số Lượng</th>
                    <th>Thành Tiền</th>
                    <th>Thao Tác</th>
                </tr>
                <?php
                    $tong = 0;
                    $i = 0;
                    foreach ($_SESSION['mycart'] as $cart){
                        $hinh = $img_path.$cart['2'];
                        $ttien = $cart['3'] * $cart['4'];
                        $tong = $tong + $ttien;
                        $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="xoá"></a>';
                        echo '<tr>
                            <th><img src="'.$hinh.'" height="80px"></th>
                            <th>'.$cart['1'].'</th>
                            <th>'.$cart['3'].'</th>
                            <th>'.$cart['4'].'</th>
                            <th>'.$ttien.'</th>
                            <th>'.$xoasp.'</th>
                            </tr>';
                        $i+=1;
                        
                    }
                    echo '<tr>
                        <td colspan="4">Tổng đơn hàng</td>
                        <td>'.$tong.'</td>
                        <td></td>
                        </tr>';   
                ?>
            </table>                 
       </div>
    </div>
        <div class="mb">
        <a href="index.php?act=bill"><input type="button" value="Đồng ý đặt hàng"></a>  <a href="index.php?act=delcart"> <input type="button" value="xóa giỏ hàng"></a>
        </div>
    </div>
        <div class="boxright">
            <?php include 'view/boxright.php'; ?>
        </div>
           
</main>

