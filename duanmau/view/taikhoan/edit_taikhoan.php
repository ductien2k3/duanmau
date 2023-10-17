<main class="catalog  mb ">  
    <div class="boxleft">       
        <div class="mb">
        <div class="box_title">cập nhật tài khoản</div>
        <div class="box_content form_account" >
        <?php
            if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                extract($_SESSION['user']);

            }
        ?>
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
                <input type="submit" name="capnhat" value="cập nhật">
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

       

       
    </div>

    <div class="boxright">
        <?php include 'view/boxright.php'; ?>
    </div>
            
</main>