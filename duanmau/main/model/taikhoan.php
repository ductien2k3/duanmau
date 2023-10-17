<?php
function insert_taikhoan($user,$pass,$email){
    $sql = "insert into tai_khoan(user,pass,email) values('$user','$pass','$email')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql = "SELECT * FROM `tai_khoan` WHERE  user = '$user' and pass = '$pass' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email){
    $sql = "SELECT * FROM `tai_khoan` WHERE  email = '$email'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id, $user, $pass, $email, $address, $tel) {
    $sql = "UPDATE `tai_khoan` SET `user`='$user', `pass`='$pass', `email`='$email', `address`='$address', `tel`='$tel' WHERE `id`='$id'";
    pdo_execute($sql);
}
function delete_tai_khoan($id){
    $sql = " DELETE FROM `tai_khoan` WHERE  id = " .$id ;
    pdo_execute($sql);
}


?>
