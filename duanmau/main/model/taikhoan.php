<?php
function insert_taikhoan($user,$pass,$email){
    $sql = "insert into tai_khoan(user,pass,email) values('$user','$pass','$email')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql = "select * from tai_khoan where user = '".$user."' and pass = '".$pass."' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
?>