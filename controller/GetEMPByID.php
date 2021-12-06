<?php

session_start();

include_once('../DAO/DBConnection.php');

function GetEMPByID($id)
{
    $dbConnection = new DBConnection();
    $result = $dbConnection->getAll("SELECT * FROM account where id = $id");
    $_SESSION['nhanvien'] = $result;
}
