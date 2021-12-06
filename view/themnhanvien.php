<?php
session_start();
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Thêm nhân viên</title>
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
            <div class="container" style="width: 600px;">
                <div class="login">
                    <div class="header text-center">
                        <h1>Thêm Nhân Viên</h1>
                    </div>
                    <br />
                    <div class="main">
        <form action="../controller/InsertEMP.php" method="POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="ten">Họ tên</label>
              <input name="ten" type="text" class="form-control" id="ten" placeholder="Họ tên" required />
            </div>
            <div class="form-group col-md-6">
              <label for="ban">Chức vụ</label>
              <select name="ban" id="ban" class="form-control">
                <option value="Nhân viên" selected>Nhân viên</option>
                <option value="Quản lý">Quản lý</option>
              
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="sdt">Số điện thoại</label>
              <input name="sdt" type="text" class="form-control" id="sdt" placeholder="Số điện thoại" required />
            </div>
            <div class="form-group col-md-6">
              <label for="chucVu">Khu vực</label>
              <select name="chucVu" id="gioiTinh" class="form-control">
                <option value="Hoàn Kiếm" selected>Hoàn Kiếm</option>
                <option value="Ba Đình">Ba Đình</option>
                <option value="Hà Đông">Hà Đông</option>
                <option value="Thanh Xuân">Thanh Xuân</option>
              </select>
            </div>
          </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="ngaySinh">Ngày sinh</label>
                                    <input name="ngaySinh" type="date" class="form-control" id="ngaySinh" placeholder="Ngày sinh" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tk">Tài khoản</label>
                                    <input name="tk" type="text" class="form-control" id="tk" placeholder="Nhập tài khoản" required />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="luong">Lương</label>
                                    <input name="luong" type="text" class="form-control" id="luong" placeholder="Nhập Lương" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="matKhau">Mật Khẩu</label>
                                    <input name="matKhau" type="password" class="form-control" id="matKhau" placeholder="Mật Khẩu" required />
                                </div>
                            </div>
                            <div class="form-row">
                               
                                <button name="Themnv" type="submit" class="btn btn-primary ml-auto ">
                                    Lưu
                                </button>
                            </div>
                        </form>
                        <br />
                        <?php
                        if (!empty($_GET['msg'])) {
                            $var = $_GET['msg'];
                            echo "<div class=\"alert alert-danger\" role=\"alert\">                
                    $var
                     </div>";
                        }
                        ?>
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