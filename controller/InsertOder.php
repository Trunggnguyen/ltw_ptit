<?php

session_start();

include_once('../DAO/DBConnection.php');


function InsertOder()
{
    
    $madon = $_POST['madon'];
    $dbConnection = new DBConnection();
    $result = $dbConnection->getAll("SELECT * FROM oder where madon LIKE '%" . $madon . "%' ");
    if (count($result) > 0) 
    {
        echo "Mã đã tồn tại";
    } else {
        $dbConnection->disconnect();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $dbConnection = new DBConnection();
        $idAcc = $_POST['idAcc'];
        $thoiGian =  date('H:i:s');
        $ngay =  date('Y-m-d');
        $result = $dbConnection->execute("INSERT INTO oder(thoiGian, madon, ngay, idAcc) values('$thoiGian', '$madon','$ngay', $idAcc)");
        $dbConnection->disconnect();
        echo "Cập nhật thành công!";
    } 

}
InsertOder();
