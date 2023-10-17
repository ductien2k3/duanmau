<div class="row2">
         <div class="row2 font_title">
          <h1>Thống kê sản phẩm theo loại</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th>Mã danh mục</th>
                <th>Tên Danh mục</th>
                <th>Số Lượng</th>
                <th>Giá Thấp Nhất</th>
                <th>Giá Cao Nhất</th>
                <th>Giá Trung Bình</th>
            </tr>
            <?php
            foreach($listtk as $tk){
                extract($tk);
                echo "<tr>
                    <td>$madm</td>
                    <td>$tendm</td>
                    <td>$count</td>
                    <td>$minprice</td>
                    <td>$maxprice</td>
                    <td>$avgprice</td>
                </tr>";
            }
        ?>            
    
          
           
            
           </table>
           </div>
           <div class="row mb10 ">
           <a href="index.php?act=bieudo"> <input  class="mr20" type="button" value="Biểu Đồ"></a>

           </div>
          </form>
         </div>
        </div>



       