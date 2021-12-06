<?php
include_once('../controller/GetNumOrder.php');
GetNumOrder();
$dsnhanvien = $_SESSION['sldon'];
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân viên</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="../assets/css/sidebar_style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Quản Lý</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Hello, <?= $user['ten'] ?></p>
                
                <li>
                            <a href="./themnhanvien.php">Thêm nhân viên</a>
                        </li>
                        <li>
                            <a href="./dsnhanvien.php">Danh sách nhân viên</a>
                        </li>
                    
                        <li>
                            <a href="./thongkeluong.php">Thống kê đơn</a>
                        </li>
            </ul>
            <div class="w-100 text-center">
                <button onclick="Logout()" class="btn btn-light btn-lg w-75">Đăng xuất</button>
            </div>
        </nav>
        <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                
                </div>
            </nav>
            <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center" style="font-size:30px">
                        Thống kê lương
                    </div>
                    <br>
                    <div class=" panel-body ">
                        <table class=" table table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>STT</th>
                                    <th>Họ tên</th>
                                    <th>SDT</th>
                                    <th>Số Đơn</th>
                                    <th>Lương </th>
                                </tr>
                            </thead>
                            <tbody id="result">
                                <?php
                                $index = 1;
                                foreach ($dsnhanvien as $nv) {
                                ?>
                                    <tr>
                                        <td><?= $index++ ?></td>
                                        <td><?= $nv['ten'] ?></td>
                                        <td><?= $nv['sdt'] ?></td>
                                        <td><?= $nv['soLan'] ?></td>
                                        <td><?= $nv['luong'] + $nv['soLan'] * 10 ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });

        });

        function Logout() {
            $.post('../controller/Logout.php', {

            }, function(data) {
                window.location.href = data;
            })
        }
    </script>
</body>

</html>