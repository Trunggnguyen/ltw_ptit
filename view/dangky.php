<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Đăng ký</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>

<body>
  <div class="container" style="width: 600px; margin-top:20px">
    <div class="login">
      <div class="header text-center">
        <h1>Đăng ký</h1>
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
            <a href="dsnhanvien.php" class="mr-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
              </svg>
            </a>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>