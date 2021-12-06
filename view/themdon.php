<?php
session_start();
$user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm đơn đã gao</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body class="text-center">
    <div class="panel-heading" style="font-size:50px">
        Xin chào <?= $user['ten'] ?>
    </div>
    <center>
    <form action="../controller/InsertOder.php" method="POST">
            <div class="form-group col-md-4">

              <label for="madon">Thêm đơn</label>
              <input name="madon" type="text" class="form-control" id="madon" placeholder="Nhập mã đơn" required />
              <input name="idAcc" value = <?php echo $user['id']?> hidden type="text" class="form-control" id="idAcc"  required />
            </div>
            <div class="panel-heading" style="font-size:20px">
        Lương của bạn: <?= $user['luong'] ?>
        <br />
        <button name="chamCong" id="chamCong" class="btn btn-primary btn-lg" style="margin:20px 0;">Thêm đơn đã gao</button>

    </div>
    </form>
            </center>
    <div id="timestamp" style="margin-top:100px; font-size: 100px;"></div>
    
    <div class="w-100 text-center">
        <button onclick="Logout()" class="btn btn-danger btn-lg">Đăng xuất</button>
    </div>
    <div id="msg"></div>
    <script>
        $(document).ready(function() {
            setInterval(timestamp, 1000);

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