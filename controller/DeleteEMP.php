<?php

session_start();

include_once('../DAO/DBConnection.php');


function DeleteEMP()
{

    $dbConnection = new DBConnection();
    $id = $_POST['id'];
    $result = $dbConnection->execute("DELETE FROM overtime WHERE idAcc = $id");
    $result = $dbConnection->execute("DELETE FROM account WHERE id = $id");
    $dbConnection->disconnect();
    
}

DeleteEMP();
