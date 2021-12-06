<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>

<body>
  <div class="container" style="width: 600px; margin-top: 10vh">
    <div class="login">
      <div class="header text-center">
        <h1>Đăng nhập</h1>
      </div>
      <br />
      <div class="main">
        <form action="../controller/Login.php" method="POST">
          <div class="form-group col-md-12">
            <label for="sdt">Tài khoản</label>
            <input name="tk" type="text" class="form-control" id="tk" placeholder="Nhập tài khoản" required />
          </div>
          <div class="form-group col-md-12">
            <label for="mk">Mật khẩu</label>
            <input name="mk" type="password" class="form-control" id="mk" placeholder="Nhập mật khẩu" required />
          </div>
          <div class="form-row col-md-12">
            
            <button type="submit" name="Login" class="btn btn-primary ml-auto">
              Đăng Nhập
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