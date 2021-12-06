<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="./assets/css/index_style.css" rel="stylesheet" type="text/css" />
  <title>Document</title>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#myPage">GOODSHIP</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">Giới Thiệu</a></li>
          <li><a href="#services">Dịch Vụ</a></li>
          <li><a href="#portfolio">Dự Án</a></li>
          <li><a href="#contact">Liên Hệ</a></li>
          <li>
            <a href="./view/dangky.php" class="btn btn-info">Đăng Ký</a>
          </li>
          <li>
            <a href="./view/dangnhap.php" class="btn btn-info">Đăng nhập</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron" id="about">
    <div class="row">
      <div class="jumbotron__title col-md-6 col-sm-12">
        <p>GOODSHIP</p>
        <p>QUẢN LÝ NHÂN VIÊN GIAO HÀNG</p>
        <span class="glyphicon glyphicon-ok"></span>&nbsp Khắp các khu vực khác nhau<br />
        <span class="glyphicon glyphicon-ok"></span>&nbsp Chi phí hợp lý<br />
        <span class="glyphicon glyphicon-ok"></span>&nbsp Được 3500 doanh
        nghiệp tin dùng<br />
        <br />
        <button type="button" class="btn btn-info btn-lg">Đăng ký</button>
      </div>
      <div class="col-md-6 col-sm-6 ">
        <img class="img-responsive" src="./assets/img/chinh-sach-giao-hang-cua-baby_autoru_com.png" alt="banner" />
      </div>
    </div>
  </div>

  <div id="services" class="container-fluid text-center">
    <h1>TẠI SAO</h1>
    <h2>NÊN SỬ DỤNG GOODSHIP?</h2>
    <br />
    <div class="row slideanim">
      <div class="col-md-3 col-sm-3 col-sm-12 card">
        <img class="img-responsive" src="./assets/img/Khả-năng-tích-hợp.png" alt="banner" />
        <h4>Khả năng tích hợp và mở rộng không giới hạn</h4>
        <p>
          API cho phép các nền tảng, hệ thống khác kết nối tới thông qua API
        </p>
      </div>
      <div class="col-md-3 col-sm-3 col-sm-12 card">
        <img class="img-responsive" src="./assets/img/Ứng-dụng-AI.png" alt="banner" />
        <h4>Ứng dụng trí tuệ nhân tạo AI vào công tác quản trị nhân sự</h4>
        <p>
          Chấm công thông qua nhận diện gương mặt FaceID. Đánh dấu bước đột
          phá mới trong công tác Quản trị nhân sự.
        </p>
      </div>
      <div class="col-md-3 col-sm-3 col-sm-12 card">
        <img class="img-responsive" src="./assets/img/Tiết-kiệm-chi-phí.png" alt="banner" />
        <h4>Tiết kiệm chi phí tối đa cho doanh nghiệp</h4>
        <p>
          Với nhiều công nghệ hiện đại, chi phí sử dụng được đánh giá là tiết
          kiệm – phù hợp với doanh nghiệp Việt Nam.
        </p>
      </div>
    </div>
    <br /><br />
    <div class="row slideanim">
      <div class="col-md-3 col-sm-3 col-sm-12 card">
        <img class="img-responsive" src="./assets/img/Đội-ngũ-tư-vấn.png" alt="banner" />
        <h4>Đội ngũ tư vấn chuyên nghiệp, nhiệt tình</h4>
        <p>
          Quy trình tư vấn – hợp tác – triển khai – đào tạo sử dụng bài bản từ
          đội ngũ chuyên viên đã có nhiều kinh nghiệm.
        </p>
      </div>
      <div class="col-md-3 col-sm-3 col-sm-12 card">
        <img class="img-responsive" src="./assets/img/Hỗ-trợ-24_7.png" alt="banner" />
        <h4>Chăm sóc trọn đời, hỗ trợ sử dụng 24/7</h4>
        <p>
          Đội ngũ hỗ trợ chuyên nghiệp theo sát sự thành công của khách hàng
          và miễn phí nâng cấp các tính năng mới.
        </p>
      </div>
    </div>
  </div>
  <br />
  <hr />
  <div id="portfolio" class="container-fluid bg-grey">
    <h1 class="text-center">Dự Án</h1>
    <h2 class="text-center">của tập đoàn GOODSHIP</h2>
    <div class="row text-center slideanim">
      <div class="row slideanim">
        <div class="col-md-3 col-sm-3 col-sm-12 card">
          <img class="img-responsive" src="./assets/img/portfolio/PngItem_757723.png" alt="banner" />
          <h4>ONE SME</h4>
          <p>Bộ giải pháp chuyển đổi số toàn diện cho SME</p>
          <br />
          <button class="btn btn-info">Xem chi tiết</button>
        </div>
        <div class="col-md-3 col-sm-3 col-sm-12 card">
          <img class="img-responsive" src="./assets/img/portfolio/PngItem_1247062.png" alt="banner" />
          <h4>GROW STAFF</h4>
          <p>Bộ giải pháp quản trị & phát triển nhân sự</p>
          <br />
          <button class="btn btn-info">Xem chi tiết</button>
        </div>
        <div class="col-md-3 col-sm-3 col-sm-12 card">
          <img class="img-responsive" src="./assets/img/portfolio/PngItem_5109507.png" alt="banner" />
          <h4>HIGH PERFORMANCE</h4>
          <p>Bộ giải pháp quản trị hiệu suất công việc</p>
          <br />
          <button class="btn btn-info">Xem chi tiết</button>
        </div>
        <div class="col-md-3 col-sm-3 col-sm-12 card">
          <img class="img-responsive" src="./assets/img/portfolio/favpng_vector-graphics-logo-company-illustration.png" alt="banner" />
          <h4>FastCoin</h4>
          <p>Giải pháp xây dựng toàn diện doanh nghiệp</p>
          <br />
          <button class="btn btn-info">Xem chi tiết</button>
        </div>
      </div>
    </div>
    <br />

    <div class="rơw carousel__container">
      <div class="col-md-4 carousel__title">
        <h2>Những Phản Hồi Của Khách Hàng</h2>
        <h4>
          Hơn 3.500+ Doanh nghiệp Việt Nam thuộc mọi lĩnh vực tin tưởng sử
          dụng GOODSHIP
        </h4>
        <p style="color: black">
          Những doanh nghiệp đã tin tưởng đồng hành và ứng dụng thành công
          phần mềm GOODSHIP
        </p>
      </div>
      <div id="myCarousel" class="carousel slide text-center col-md-8" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <h4>
              "Công ty này thật tuyệt vời.Tôi rất vui vì kết quả!"<br /><span>Michael Roe, Vice President, Comment Box</span>
            </h4>
          </div>
          <div class="item">
            <h4>
              "Một từ thôi... WOW!!"<br /><span>John Doe, Salesman, Rep Inc</span>
            </h4>
          </div>
          <div class="item">
            <h4>
              "Tôi không có gì phải phàn nàn với công ty?"<br /><span>Chandler Bing, Actor, FriendsAlot</span>
            </h4>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <hr />
  <div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">Liên hệ</h2>
    <div class="row" style="margin: 0 30px">
      <div class="col-sm-5">
        <p>Liên hệ với chúng tôi, chúng tôi sẽ phản hồi bạn trong 24 giờ.</p>
        <p>
          <span class="glyphicon glyphicon-map-marker"></span> Phố Duy Tân,
          Quận Cầu Giấy, TP. Hà Nội
        </p>
        <p>
          <span class="glyphicon glyphicon-map-marker"></span> Phường 7, Quận
          Tân Bình, TP. Hồ Chí Minh
        </p>
        <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
        <p>
          <span class="glyphicon glyphicon-envelope"></span>
          myemail@something.com
        </p>
      </div>
      <div class="col-sm-7 slideanim__contact">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Tên" type="text" required />
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Lời nhắn" rows="5"></textarea><br />
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-info pull-right" type="submit">
              Send
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

 

  <script>
    $(document).ready(function() {
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on("click", function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $("html, body").animate({
              scrollTop: $(hash).offset().top,
            },
            900,
            function() {
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            }
          );
        } // End if
      });

      $(window).scroll(function() {
        $(".slideanim").each(function() {
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
        });
      });
    });
  </script>
</body>

</html>