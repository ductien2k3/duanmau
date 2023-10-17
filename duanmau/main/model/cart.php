<?php
function loadall_thongke(){
        $sql = "SELECT danhmuc.id as madm ,danhmuc.name as tendm , COUNT(san_pham.id) as count, MIN(san_pham.price) as minprice, MAX(san_pham.price) as maxprice, AVG(san_pham.price) as avgprice";
        $sql .= " FROM san_pham LEFT JOIN danhmuc ON danhmuc.id = san_pham.id_danhmuc";
        $sql .= " GROUP BY danhmuc.id";
        $sql .= " ORDER BY danhmuc.id DESC";
        $listtk = pdo_query($sql);
        return $listtk;
    }
?>
    
