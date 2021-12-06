<?php
include_once('../controller/GetEMP.php');
CountEMP();
$tongnv = $_SESSION['tongnv'][0]['tongnv'];
$user = $_SESSION['user'];


$pages = ceil($tongnv / 8);
$cur_page = 1;
if (isset($_GET['page'])) {
    $cur_page = $_GET['page'];
}
$index =  ($cur_page - 1) * 8;
GetEMP($index);
$dsnhanvien = $_SESSION['dsnhanvien'];

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
                    <div class="panel-heading text-center" style="font-size:30px;">
                        Quản lý nhân viên
                    </div>
                    <div class="form-inline my-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tìm kiếm</span>
                            </div>
                            <input type="text" id="search_text" name="search_text" class="form-control" placeholder="Nhập tên nhân viên" />
                        </div>
                        <a href="themnhanvien.php" type="button" class="btn btn-success ml-auto">Thêm nhân viên</a>
                    </div>
                    <div class="form-group col-md-6">
              <label for="chucVu">Khu vực</label>
              <select name="chucVu" id="gioiTinh" class="form-control">
                  
              <option value="Hoàn Kiếm" selected>Hoàn Kiếm</option>
                <option value="All" selected>All</option>
                <option value="Ba Đình">Ba Đình</option>
                <option value="Hà Đông">Hà Đông</option>
                <option value="Thanh Xuân">Thanh Xuân</option>
              </select>
            </div>
                    <div class=" panel-body ">
                        <table class=" table table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>STT</th>
                                    <th>Họ tên</th>
                                    <th>Ngày Sinh</th>
                                    <th>SDT</th>
                                    <th>Lương</th>
                                    <th>Khu vực</th>
                                    <th>Chức vụ</th>
                                    <th>Chức Năng</th>
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
                                        <td><?= $nv['dob'] ?></td>
                                        <td><?= $nv['sdt'] ?></td>
                                        <td><?= $nv['luong'] ?></td>
                                        <td><?= $nv['chucVu'] ?></td>
                                        <td><?= $nv['ban'] ?></td>
                                        <td>
                                            <button name="Xoa" class="btn btn-danger" onclick="DelEMP(<?= $nv['id'] ?>)">Xóa</button>
                                            <a href="suathongtin.php?id=<?= $nv['id'] ?>" type="button" class="btn btn-warning">Sửa</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php
                            for ($i = 1; $i <= $pages; $i++) {
                                echo '<li  class="page-item"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function DelEMP(id) {
            $.post('../controller/DeleteEMP.php', {
                'id': id
            }, function(data) {
                location.reload()
            })
        }

        function Logout() {
            $.post('../controller/Logout.php', {

            }, function(data) {
                window.location.href = data;
            })
        }

        $(document).ready(function() {
            $('#search_text').keyup(function() {
                var txt = $(this).val();
                $.ajax({
                    url: "../controller/SearchEMP.php",
                    method: "post",
                    data: {
                        search: txt
                    },
                    dataType: "text",
                    success: function(data) {
                        $('#result').html(data)
                    }
                })
            });
        })

        $(document).ready(function() {

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });

        });
    </script>
</body>

</html>