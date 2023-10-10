<main class="catalog  mb ">  
    <div class="boxleft">       
        <div class="mb">
        <div class="box_title">Đăng Kí Thành Viên</div>
        <div class="box_content form_account" >

            <form action="index.php?act=dangky" method="post">
                <h4>Nhập Email </h4><br>
                <input type="email" name="email" >
                <h4>Tên của bạn</h4><br>
                <input type="text" name="user">
                <h4>Mật khẩu</h4><br>
                <input type="password" name="pass">
                <input type="submit" name="dangky" value="đăng kí">
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