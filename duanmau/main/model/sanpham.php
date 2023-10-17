<?php
    function insert_sanpham($tensp,$giasp,$filename,$mota,$iddm){
        $sql = "insert into san_pham(name,price,img,mo_ta,id_danhmuc) values('$tensp',$giasp,'$filename','$mota',$iddm)";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql = " delete from san_pham where id = " .$id ;
        pdo_execute($sql);
    }
    function loadall_sanpham($kyw, $iddm) {
        $sql = "SELECT * FROM san_pham WHERE 1";
        if ($kyw != "") {
            $sql .= " AND name LIKE '%$kyw%'";
        }
        if ($iddm > 0) {
            $sql .= " AND id_danhmuc = $iddm";
        }
        $sql .= " ORDER BY name";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_home() {
        $sql = "SELECT * FROM san_pham WHERE 1 order by id desc limit 0,9";  
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_themostview() {
        $sql = "SELECT * FROM san_pham WHERE 1 order by view desc limit 0,9";  
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    
    function loadone_sanpham($id){
        $sql = "select * from san_pham where id = ".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function load_ten_danhmuc($iddm){
        if($iddm > 0 ){
            $sql = "select * from danhmuc where id = ".$iddm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $name;
        } else {
            return "";
        }
        
    }
    function load_sanpham_cungloai($id,$iddm){
        $sql = "select * from san_pham where id_danhmuc =".$iddm." AND id <> ".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham($id,$tensp,$giasp,$filename,$mota,$iddm){
        if($filename!=""){
            $sql = "UPDATE san_pham set id = '$id',name = '$tensp' , price = '$giasp', mo_ta = '$mota', img = '$filename', id_danhmuc = '$iddm' where id = $id";
        } else {
            $sql = "UPDATE san_pham set id = '$id',name = '$tensp' , price = '$giasp', mo_ta = '$mota',id_danhmuc = '$iddm' where id = $id" ;
        }
        pdo_execute($sql);
    }
    function loadall_taikhoan() {
        $sql = "SELECT * FROM tai_khoan ORDER BY id desc";  
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    

?>