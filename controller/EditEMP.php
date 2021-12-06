<?php

session_start();

include_once('../DAO/DBConnection.php');


function EditEMP()
{
    $id = $_POST['id'];
    $tk = $_POST['tk'];
    $tkold = $_POST['tkold'];
    $mk = $_POST['matKhau'];
    $ten = $_POST['ten'];
    $sdt = $_POST['sdt'];
    $ngaySinh = $_POST['ngaySinh'];
    $ban = $_POST['ban'];
    $luong = $_POST['luong'];
    $chucVu = $_POST['chucVu'];
    $dbConnection = new DBConnection();

    if ($tk == $tkold) {
        $result = $dbConnection->execute("UPDATE account SET tk='$tk', mk='$mk', ten='$ten', dob='$ngaySinh', sdt='$sdt', luong=$luong, chucVu='$chucVu', ban='$ban', viTri=2 WHERE id=$id");
        header("Location:../view/dsnhanvien.php");
    } else {
        $check = $dbConnection->getAll("SELECT * FROM account WHERE tk = '$tk'");
        if (count($check) > 0) {
            header("Location:../view/suathongtin.php?msg=Trùng tài khoản&id=$id");
        } else {
            $result = $dbConnection->execute("UPDATE account SET tk='$tk', mk='$mk', ten='$ten', dob='$ngaySinh', sdt='$sdt', luong=$luong, chucVu='$chucVu', ban='$ban', viTri=2 WHERE id=$id");
            header("Location:../view/dsnhanvien.php");
        }
    }
    $dbConnection->disconnect();
}

EditEMP();
