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
        <!-- jquery -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#binhluan").load("view/binhluan/binhluatform.php",{id_pro: <?=$id?>});
            });


        </script>
        
        <div class="mb">
        <div class="box_title">Bình Luận</div>
        <div class="box_content " id="binhluan">

        </div>
        </div> -->

        <!-- iframe -->
        <div class="mb">
        <div class="box_title">Bình Luận</div>
        <div class="box_content " id="binhluan">
            <iframe src="view/binhluan/binhluatform.php?id_pro=<?=$id?>" frameborder="0" width="100%" height="400px"></iframe>
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