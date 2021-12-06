<?php

session_start();

include_once('../DAO/DBConnection.php');


if (isset($_POST['Login'])) {

    $user_name = trim($_POST['tk']);
    $user_password = trim($_POST['mk']);

    $dbConnection = new DBConnection();
    $result = $dbConnection->getAll("SELECT * FROM account where tk='$user_name' and mk='$user_password' ");
    $_SESSION['user'] = $result[0];

    if (count($result) > 0) {
        if ($result[0]['viTri'] == 2) {
            header("Location:../view/themdon.php");
        } else {
            header("Location:../view/dsnhanvien.php");
        }
    } else {
        header("Location:../view/dangnhap.php?msg=Tài Khoản hoặc mật khẩu sai!");
    }
    $dbConnection->disconnect();
}
