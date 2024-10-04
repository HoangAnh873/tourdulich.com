<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="icon/themify-icons/themify-icons.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="shortcut icon" href="/frontend/img/GoodTrip5.png" />
    <link rel="stylesheet" href="/frontend/css/main.css" />
    <link rel="stylesheet" href="/frontend/css/header.css" />
    <link rel="stylesheet" href="/frontend/css/content.css" />
    <link rel="stylesheet" href="/frontend/css/slider.css" />
    <link rel="stylesheet" href="/frontend/css/bookingside.css" />
    <link rel="stylesheet" href="/frontend/css/blog.css" />
    <link rel="stylesheet" href="/frontend/css/footerside.css" />
    <title>| GoodTrip Việt Nam</title>
  </head>
  <body>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat"></div>

    <script>
      var chatbox = document.getElementById("fb-customer-chat");
      chatbox.setAttribute("page_id", "112627521317796");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function () {
        FB.init({
          xfbml: true,
          version: "v12.0",
        });
      };

      (function (d, s, id) {
        var js,
          fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js";
        fjs.parentNode.insertBefore(js, fjs);
      })(document, "script", "facebook-jssdk");
    </script>
    <div id="main">
      <header id="header">
        <!-- Begin menu nav -->
        <div class="menu_top">
          <a href=" {{ route('home.index') }} "><img src="/frontend/img/GoodTrip5.png" alt="Logonav" /></a>
          <ul id="nav">
            <li><a href="{{ route('home.index') }}">Trang chủ</a></li>
            <li><a href="{{ route('home.service') }}">Dịch vụ</a></li>
            <li><a href="{{ route('home.booking') }}">Booking</a></li>
            <li><a href="{{ route('home.blog') }}">blog</a></li>
            <li><a href="{{ route('home.help') }}">Hỗ trợ</a></li>
            @if (Auth::guard('customer')->check())
            <li><a href="{{ route('logout') }}">Đăng Xuất</a></li>
            @endif
          </ul>
          <!-- User -->
          <div
            class="user-section"
            onclick="alert('Hãy đăng nhập để sử dụng dịch vụ')"
          >
            <i class="fas fa-user"></i>
          </div>
          <div class="login-btn">
            <a href="{{ route('login.index') }}">Đăng nhập</a>
          </div>
        </div>

        <!-- End menu nav -->
      </header>
      <!-- ============================== -->
      <!-- Booking -->
      <div id="booking">
        <div class="introduct">
          <div class="container">
            <div class="content center">
              <h5 class="t-black">ĐI KHẮP VIỆT NAM</h5>
              <span class="line gold"></span>
              <h2 class="t-content">
                BẠN ĐÃ QUYẾT ĐỊNH
                <span class="t-gold">ĐẶT VÉ</span>
                CHƯA?
              </h2>
              <h5 class="t-black bot-content">
                HÃY ĐIỀN THÔNG TIN ĐỂ CHÚNG TÔI CÓ THỂ HỖ TRỢ
              </h5>
            </div>
          </div>
        </div>
        <div class="container-booking">
          <img src="/frontend/img/bookimg.png" alt="" />
          <form action="">
            <div class="inputBox">
              <h3>Bạn muốn đi đâu?</h3>
              <input type="text" placeholder="chọn một địa điểm" />
            </div>
            <div class="inputBox">
              <h3>Có bao nhiêu người cùng tham gia?</h3>
              <input type="number" placeholder="số người tham gia du lịch" />
            </div>
            <div class="inputBox">
              <h3>Ngày bắt đầu chuyến đi?</h3>
              <input type="date" />
            </div>
            <div class="inputBox">
              <h3>Ngày kết thúc chuyến đi?</h3>
              <input type="date" />
            </div>
            <input
              type="button"
              onclick="alert('Bạn đã hãy nạp lần đầu để được sử dụng dịch vụ')"
              class="btn"
              value="Đặt ngay"
            />
          </form>
        </div>
      </div>
      <!-- End Booking -->
      <!-- ============================== -->
      <div id="footer">
        <div class="footer-top">
          <div class="contact-container center">
            <div class="contact-top">
              <div class="introduct">
                <div class="container">
                  <div class="content center">
                    <h5 class="t-black">ĐI KHẮP VIỆT NAM</h5>
                    <span class="line gold"></span>
                    <h2 class="t-content">
                      ĐỪNG QUÊN RẰNG CÒN CÓ
                      <span class="t-gold">GOODTRIP</span>
                    </h2>
                    <h5 class="t-black bot-content">
                      HÃY GIỮ LIÊN LẠC VỚI GOODTRIP
                    </h5>
                  </div>
                </div>
              </div>
              <div class="container-email">
                <input
                  id="form_email"
                  type="email"
                  name="email"
                  class="form-control"
                  placeholder="Để lại Email của bạn*"
                  required="required"
                />
                <input type="submit" name="submit" id="submit" value="Giử" />
              </div>
            </div>
            <div class="contact-bot">
              <h5 class="t-black">GIỮ LIÊN LẠC VỚI CHÚNG TÔI</h5>
              <span class="line gold"></span>
              <div class="mxh">
                <a href="" class="primary-btn"
                  ><i class="fab fa-facebook-square" aria-hidden="true"></i
                ></a>
                <a href="" class="primary-btn"
                  ><i class="fab fa-instagram" aria-hidden="true"></i
                ></a>
                <a href="" class="primary-btn"
                  ><i class="fab fa-twitter" aria-hidden="true"></i
                ></a>
              </div>
            </div>
            <div class="footer-end">
              2024 - Xin Cảm Ơn
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
