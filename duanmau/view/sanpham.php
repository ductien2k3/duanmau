<main class="catalog  mb ">  
    <div class="boxleft">       
        <div class="mb">
        <div class="box_title">Sản Phẩm :<strong><?=$tendm?></strong></div>
        <div class="box_content">
        <div class="items">
        <?php
            //$i = 0;
            foreach ($dssp as $sp){
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=".$id;
                $hinh = $img_path.$img;
                //if(($i ==2) || ($i == 5) || ($i == 8)){
                //$item = "";
                //} else {
                $item = "box_items";
                //}                   
                echo '<div class="'.$item.'">
                <div class="box_items_img"><a href="'.$linksp.'">
                <img src="'.$hinh.'" alt="" height="200px">
                <div class="add" href="">ADD TO CART</div>
                </a></div>
                <a class="item_name" href="'.$linksp.'">'.$name.'</a>
                <p class="price">$ '.$price.'</p>                    
                </div>';
                //$i+=1;
             }
        ?>
        </div>
        </div>
        </div>

    </div>

    <div class="boxright">
        <?php include 'boxright.php'; ?>
    </div>
            
</main>