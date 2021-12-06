<?php

session_start();

include_once('../DAO/DBConnection.php');


function SearchEMP()
{
    $ten = $_POST['search'];
    $dbConnection = new DBConnection();
    $result = $dbConnection->getAll("SELECT * FROM account where ten LIKE '%" . $ten . "%' AND viTri = 2");
    if (count($result) > 0) {
        $index = 1;
        foreach ($result as $nv) {
            echo '
                <tr>
                    <td>' . $index++ . '</td>
                    <td>' . $nv['ten'] . '</td>
                    <td>' . $nv['dob'] . '</td>
                    <td>' . $nv['sdt'] . '</td>
                    <td>' . $nv['luong'] . '</td>
                    <td>' . $nv['chucVu'] . '</td>
                    <td>' . $nv['ban'] . '</td>
                    <td>
                    <button class="btn btn-danger" onclick="DelEMP(' . $nv['id'] . ')">Xóa</button>
                    <a href="suathongtin.php?id=' . $nv['id'] . '" type="button" class="btn btn-warning">Sửa</a>
                    </td>
                </tr>
            ';
        }
    } else {
        echo '
        <tr>
        <td>Data Not Found</td>
        </tr>';
    }

}
SearchEMP();
