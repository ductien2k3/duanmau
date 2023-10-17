<?php
    function insert_binhluan($noi_dung,$id_user,$id_pro,$ngay_bl){
        $sql = "INSERT INTO `binh_luan`(`noi_dung`, `id_user`, `id_pro`, `ngay_bl`) VALUES ('$noi_dung','$id_user','$id_pro','$ngay_bl')";
        pdo_execute($sql);
    }
    function loadall_binhluan($id_pro){
        $sql = "select * from binh_luan where 1 ";
        if($id_pro >0){
            $sql.= " and id_pro = $id_pro ";     
        } else {
            $sql.= " order by id desc ";
        }
        $listbl = pdo_query($sql);
        return $listbl;
    }
    function delete_binhluan($id){
        $sql = " DELETE FROM `binh_luan` WHERE  id = " .$id ;
        pdo_execute($sql);
    }
    // function update_sanpham($id,$tensp,$giasp,$filename,$mota,$iddm){
    //     if($filename!=""){
    //         $sql = "UPDATE san_pham set id = '$id',name = '$tensp' , price = '$giasp', mo_ta = '$mota', img = '$filename', id_danhmuc = '$iddm' where id = $id";
    //     } else {
    //         $sql = "UPDATE san_pham set id = '$id',name = '$tensp' , price = '$giasp', mo_ta = '$mota',id_danhmuc = '$iddm' where id = $id" ;
    //     }
    //     pdo_execute($sql);
    //}
?>