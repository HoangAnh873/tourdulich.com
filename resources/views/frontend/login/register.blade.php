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
    <link rel="stylesheet" href="/frontend/css/login.css" />
    <link rel="stylesheet" href="/frontend/style.css" />
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
          <a href="{{ route('home.index') }}"><img src="/frontend/img/GoodTrip5.png" alt="Logonav" /></a>
          <ul id="nav">
            <li><a href="{{ route('home.index') }}">Trang chủ</a></li>
            <li>
              <a href="#">Tìm kiếm</a>
              <div class="container-1">
                <input
                  class="subnav timkiem"
                  type="search"
                  placeholder="Tìm kiếm..."
                />
              </div>
            </li>
            <li>
              <a href="#services">
                Dịch vụ
                <i class="dow-icon ti-arrow-circle-down"></i>
              </a>
              <ul class="subnav">
                <li><a href="booking.html">Booking</a></li>
                <li><a href="goidulich.html">Gói du lịch</a></li>
              </ul>
            </li>
            <li><a href="blog.html">blog</a></li>
            <li><a href="hotro.html">Hỗ trợ</a></li>
          </ul>
          <!-- User -->
          <div
            class="user-section"
            onclick="alert('Hãy đăng nhập để sử dụng dịch vụ')"
          >
            <i class="fas fa-user"></i>
          </div>
          <div class="login-btn">
            <a href=" {{ route('register.index') }}"> Đăng Nhập </a>
          </div>
        </div>

        <!-- End menu nav -->
      </header>
      <!-- REGISTER -->
        {{-- @php
            $url = ($config['method'] == 'create') ? route('user.store') : route('user.update', $user->id);
        @endphp       --}}
      <form action="{{ route('customer.register') }}" method="post">
        @csrf
        <div id="login">
          <div class="login-banner">
            <div class="uilogin">
              <div class="login-top">
                <img src="/frontend/img/GoodTrip5.png" alt="Logonav" />
                <h1>
                  ĐĂNG KÝ TÀI KHOẢNG <span style="color: #06aa2a">GOODTRIP</span>
                </h1>
              </div>
              <div class="login-mid">
                <div class="form-group">
                  @if ($errors->has('email'))
                  <span class="error-message">* {{ $errors->first('email') }}</span>
                  @endif
                  <input
                    type="email"
                    placeholder="Nhập email của bạn"
                    name="email"
                    value="{{ old('email', ($customer->email) ?? '') }}"
                  />
                </div>
                <div class="form-group">
                  @if ($errors->has('name'))
                  <span class="error-message">* {{ $errors->first('name') }}</span>
                  @endif
                  <input
                    name="name"
                    placeholder="Họ tên"
                    type="text"
                    value="{{ old('name', ($customer->name) ?? '') }}"
                  />
                </div>
                <div class="form-group">
                  @if ($errors->has('phone'))
                  <span class="error-message">* {{ $errors->first('phone') }}</span>
                  @endif
                  <input
                    name="phone"
                    placeholder="Số Điện Thoại"
                    type="text"
                    value="{{ old('phone', ($customer->phone) ?? '') }}"
                  />
                </div>
                <div class="form-group">
                  @if ($errors->has('sex'))
                  <span class="error-message">* {{ $errors->first('sex') }}</span>
                  @endif
                  <input
                    name="sex"
                    placeholder="Giới Tính"
                    type="text"
                    value="{{ old('sex', ($customer->sex) ?? '') }}"
                  />
                </div>
                <div class="form-group">
                  @if ($errors->has('password'))
                  <span class="error-message">* {{ $errors->first('password') }}</span>
                  @endif
                  <input
                    name="password"
                    placeholder="Mật Khẩu"
                    type="password"
                    value="{{ old('password', ($customer->password) ?? '') }}"
                  />
                </div>
                <div class="form-group">
                  @if ($errors->has('re_password'))
                  <span class="error-message">* {{ $errors->first('re_password') }}</span>
                  @endif
                  <input
                    name="re_password"
                    placeholder="Nhập lại mật khẩu"
                    type="password"
                    value="{{ old('re_password', ($customer->re_password) ?? '') }}"
                  />
                </div>
                
                <div class="sub-login-mid">
                  <p><a href="{{ route('login.index') }}">Đăng Nhập</a></p>
                  <p><a href="#">Quên mật khẩu?</a></p>
                </div>
              </div>
              <div class="login-bot">
                <input type="submit" value="Đăng Ký" />
              </div>
              <div class="another-login">
                <div class="mxh">
                  <a href="" class="primary-btn"
                    ><i class="fab fa-facebook-square" aria-hidden="true"></i
                  ></a>
                  <a href="" class="primary-btn"><i class="fab fa-google"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <!-- END REGISTER -->
    </div>
  </body>
</html>
