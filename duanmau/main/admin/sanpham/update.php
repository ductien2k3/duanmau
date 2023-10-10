<?php
    if(is_array($sp)){
        extract($sp);
    }
    $hinhpath = "../upload/".$img;
    if(is_file($hinhpath)){
        $hinh = "<img src='$hinhpath' width='100px'>";
    } else {
            $hinh = "no image";
        }
?>
<div class="row2">
         <div class="row2 font_title">
          <h1>Cập nhật sản phẩm</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
           </div>
           <select name="iddm" >
                    <option value="0">Tất cả</option>
                    <?php 
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            if($id_danhmuc==$id){
                                echo "<option value='$id'  selected> $name </option>";
                            }else{
                                echo "<option value='".$id."'> $name </option>";
                            }
                        }
                    ?>
                </select>


            <div class="row2 mb10">
            <label>Tên sản phẩm</label> <br>
            <input type="text" name="tensp" placeholder="nhập vào tên" value="<?=$sp['name'] ?>">
           </div>

           <div class="row2 mb10">
            <label> Giá sản phẩm </label> <br>
            <input type="text" name="giasp" placeholder="nhập vào giá" value="<?=$price ?>">
          </div>

           <div class="row2 mb10">
            <label> ảnh </label> <br>
            <input type="file" name="hinh">
            <?=$hinh?>
           </div>

           <div class="row2 mb10">
            <label> mô tả </label> <br>
            <textarea name="mota" cols="30" rows="10" ><?=$mo_ta?></textarea>
           </div>

           <div class="row mb10 ">
        <input type="hidden" name="id" value="<?=$sp['id'] ?>">      
         <input class="mr20" type="submit" value="Cập nhật" name="capnhat">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="Danh sách"></a>
        </div>
        
        <?php 
        if(isset($thongbao) && ($thongbao!="")) {
            echo $thongbao;
        }
        ?>
        </form>
         </div>
        </div>
 
     <!-- END HEADER -->

       
    </div>