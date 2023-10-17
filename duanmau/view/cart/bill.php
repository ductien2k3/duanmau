<main class="catalog  mb ">  
    <div class="boxleft">       
        <div class="mb">
        <div class="box_title">Thông tin đặt hàng</div>
        <div class="box_content">
            <table>
                <?php
                    if(isset($_SESSION['user'])) {
                        $name = $_SESSION['user']['name'];
                        $address = $_SESSION['user']['address'];
                        $email = $_SESSION['user']['email'];
                        $tel = $_SESSION['user']['tel'];
                    } else {
                        $name = "";
                        $address = "";
                        $email = "";
                        $tel = "";
                    }
                ?>
                <tr>
                    <td>Tên khách hàng:</td>
                    <td><input type="text" name="name" value="<?=$name?>" ></td>
                </tr>

                <tr>
                    <td>địa chỉ:</td>
                    <td><input type="text" name="address" value="<?=$address?>" ></td>
                </tr>

                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="<?=$email?>" ></td>
                </tr>
                <tr>
                    <td>Số Điện Thoại:</td>
                    <td><input type="text" name="tel" value="<?=$tel?>" ></td>
                </tr>

            </table>
        
   
        </div>
        </div>

        <div class="mb">
        <div class="box_title">Phương Thức Thanh Toán</div>
        <div class="box_content">
            <table>
                <tr>
                    <td><input type="radio" name="pttt" >Chuyển Tiền Khi nhận hàng</td>
                    <td><input type="radio" name="pttt" >Chuyển Khoản Ngân hàng</td>
                    <td><input type="radio" name="pttt" >Thanh Toán online</td>
                </tr>
            </table>

        </div>
        </div>

    </div>

    <div class="boxright">
        <?php include 'boxright.php'; ?>
    </div>
            
</main>