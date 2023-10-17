<div class="row2">
    <div class="row2 font_title">
    <h1>Cập nhật sản phẩm</h1>
    </div>
    <div class="row2 form_content ">
    <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
    <div class="row2 mb10 form_content_container">
    </div>
  

            <form action="index.php?act=edit_taikhoan" method="post">
            <h4>Nhập Email </h4><br>
            <input type="email" name="email" value="<?=$email?>">
            <h4>Tên của bạn</h4><br>
            <input type="text" name="user" value="<?=$user?>">
            <h4>Mật khẩu</h4><br>
            <input type="password" name="pass" value="<?=$pass?>">
            <h4>Địa Chỉ</h4><br>
            <input type="text" name="address" value="<?=$address?>">
                <h4>Số Điện Thoại</h4><br>
                <input type="text" name="tel" value="<?=$tel?>">

                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="sua" value="cập nhật">
                <input type="reset" value="nhập lại" name="reset">
                <br>
                <div class="thongbao">
                <?php 
                if(isset($thongbao) && ($thongbao!="")) {
                echo $thongbao;
                }
                ?></div>
            </form>
         </div>
        </div>
 
     <!-- END HEADER -->

       
    </div>