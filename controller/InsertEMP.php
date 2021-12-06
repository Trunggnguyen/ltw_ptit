<?php

session_start();

include_once('../DAO/DBConnection.php');


function InsertEMP()
{
    if (isset($_POST['Themnv'])) {
        $tk = $_POST['tk'];
        $mk = $_POST['matKhau'];
        $ten = $_POST['ten'];
        $sdt = $_POST['sdt'];
        $ngaySinh = $_POST['ngaySinh'];
        $ban = $_POST['ban'];
        $luong = $_POST['luong'];
        $chucVu = $_POST['chucVu'];
        $dbConnection = new DBConnection();
        $check = $dbConnection->getAll("SELECT * FROM account WHERE tk = '$tk'");
        if (count($check) > 0) {
            header("Location:../view/themnhanvien.php?msg=This account already exists ");
        } else {
            if($ban=="Nhân viên"){
                $result = $dbConnection->execute("INSERT INTO account(tk, mk, ten, dob, sdt, luong, chucVu, ban, viTri) values('$tk', '$mk', '$ten', '$ngaySinh', '$sdt', $luong, '$chucVu', '$ban', 2)");
                header("Location:../view/dsnhanvien.php");
            }else{
                $result = $dbConnection->execute("INSERT INTO account(tk, mk, ten, dob, sdt, luong, chucVu, ban, viTri) values('$tk', '$mk', '$ten', '$ngaySinh', '$sdt', $luong, '$chucVu', '$ban', 1)");
                header("Location:../view/dsnhanvien.php");
            }
        
        }
        $dbConnection->disconnect();
    }
}

InsertEMP();
