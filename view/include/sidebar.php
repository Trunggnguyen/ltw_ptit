<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Quản Lý</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Hello, <?= $user['ten'] ?></p>
            <li>
                <a href="./dashboard.php">Dashboard</a>
            </li>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Quản Lý Nhân Viên</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="./themnhanvien.php">Thêm nhân viên</a>
                    </li>
                    <li>
                        <a href="./dsnhanvien.php">Danh sách nhân viên</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chấm Công</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="./dsdimuon.php">Danh Sách đi muộn</a>
                    </li>
                    <li>
                        <a href="./thongkedimuon.php">Thống kê đi muộn</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="w-100 text-center">
            <button onclick="Logout()" class="btn btn-light btn-lg w-75">Đăng xuất</button>
        </div>
    </nav>
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Ẩn/Hiện</span>
                </button>

            </div>
        </nav>
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