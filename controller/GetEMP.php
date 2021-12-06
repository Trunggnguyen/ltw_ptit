<?php

session_start();

include_once('../DAO/DBConnection.php');


function GetEMP($index)
{

    $dbConnection = new DBConnection();
    $result = $dbConnection->getAll('SELECT * FROM account  where viTri = 2 limit ' . $index . ', 8');
    $_SESSION['dsnhanvien'] = $result;
    $dbConnection->disconnect();
}

function CountEMP()
{
    $dbConnection = new DBConnection();
    $result = $dbConnection->getAll("SELECT count(id) as tongnv FROM account where viTri = 2");
    $_SESSION['tongnv'] = $result;
    $dbConnection->disconnect();
}
