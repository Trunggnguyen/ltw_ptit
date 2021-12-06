<?php

session_start();

include_once('../DAO/DBConnection.php');




function GetNumOrder()
{
    $dbConnection = new DBConnection();
    $result = $dbConnection->getAll("SELECT ten, sdt, (
            SELECT COUNT( ov.idAcc)
            FROM oder ov
            WHERE a.id = ov.idAcc
            ) AS soLan,
            luong
        FROM account a
        WHERE a.id
        ORDER BY soLan DESC");
    $_SESSION['sldon'] = $result;
    $dbConnection->disconnect();
}
