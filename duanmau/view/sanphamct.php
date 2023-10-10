<main class="catalog  mb ">  
    <div class="boxleft">       
        <div class="mb">
            <?php
                extract($onesp);
            ?>
        <div class="box_title"><?=$name?></div>
        <div class="box_content">
        <?php
            $img = $img_path . $img;
            echo '<div style="text-align: center;">';
            echo '<img src="'.$img.'" alt="" style="height: 300px;"><br>';
            echo '</div>';
            echo $mo_ta;
        ?>
        </div>
        </div>

        <div class="mb">
        <div class="box_title">Bình Luận</div>
        <div class="box_content">
        </div>
        </div>

        <div class="mb">
        <div class="box_title">Sản Phẩm Cùng Loại</div>
        <div class="box_content">
            <?php
                foreach($sp_cungloai as $sp_cungloai){
                    extract($sp_cungloai);
                    $linksp = "index.php?act=sanphamct&idsp=" .$id;
                    echo '<li><a href="'.$linksp.'">'.$name.'</a></a></li>';
                }
            ?>
        </div>
        </div>

    </div>

    <div class="boxright">
        <?php include 'boxright.php'; ?>
    </div>
            
</main>