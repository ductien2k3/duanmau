<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH Tài Khoản</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>Mã Tài Khoản</th>
                <th>Tên Đăng Nhập</th>
                <th>Mật Khẩu</th>
                <th>Email</th>
                <th>Địa Chỉ</th>
                <th>Số Điện Thoại</th>
                <th>Vai Trò</th>

                <th></th>
            </tr>
            <?php
            foreach($listtaikhoan as $taikhoan){
                extract($taikhoan);
                $suatk = "index.php?act=suatk&id=$id";
                $xoatk = "index.php?act=xoatk&id=$id";
                echo "<tr>
                    <td><input type='checkbox' name='' id=''></td>
                    <td>$id</td>
                    <td>$user</td>
                    <td>$pass</td>
                    <td>$email</td>
                    <td>$address</td>
                    <td>$tel</td>
                    <td>$role</td>
                    <td><a href='$suatk'><input type='button' value='sửa'></a> <a href='$xoatk'><input type='button' value='xoá'></a></td>
                </tr>";
            }
        ?>            
    
          
           
            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">

           </div>
          </form>
         </div>
        </div>



       
