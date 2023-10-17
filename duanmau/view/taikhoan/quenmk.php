<main class="catalog  mb ">  
    <div class="boxleft">       
        <div class="mb">
        <div class="box_title">Quên mật Khẩu</div>
        <div class="box_content form_account" >

            <form action="index.php?act=quenmk" method="post">
                <h4>Nhập Email </h4><br>
                <input type="email" name="email" >

                <input type="submit" name="guiemail" value="Gửi Email">
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