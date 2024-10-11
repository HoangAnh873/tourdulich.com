<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="{{ config('app.url') }}">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link rel="stylesheet" href="icon/themify-icons/themify-icons.css" /> --}}
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="shortcut icon" href="frontend/img/GoodTrip5.png" />
    <link rel="stylesheet" href="frontend/css/main.css" />
    <link rel="stylesheet" href="frontend/css/header.css" />
    <link rel="stylesheet" href="frontend/css/login.css" />
    <title>| GoodTrip Việt Nam</title>
  </head>
  <body>
    <div id="main">
      <header id="header">
        <!-- Begin menu nav -->
        @include('frontend.component.header')

        <!-- End menu nav -->
      </header>
      <!-- LOGIN -->
      @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 
      <form action="{{ route('customer.login') }} " method="post">
        @csrf
        <div id="login">
          <div class="login-banner">
            <div class="uilogin">
              <div class="login-top">
                <img src="/frontend/img/GoodTrip5.png" alt="Logonav" />
                <h1>
                  ĐĂNG NHẬP VÀO <span style="color: #06aa2a">GOODTRIP</span>
                </h1>
              </div>
              <div class="login-mid">
                <input
                  type="email"
                  placeholder="Nhập Email của bạn"
                  name="email"
                  value=""
                />
                <input
                  name="password"
                  placeholder="Mật khẩu"
                  type="password"
                  maxlength="6"
                  value=""
                />
                <div class="sub-login-mid">
                  <p><a href="{{ route('register.index') }}">Đăng kí</a></p>
                  <p><a href="#">Quên mật khẩu?</a></p>
                </div>
              </div>
              <div class="login-bot">
                <input type="submit" value="Đăng nhập" />
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
      <!-- END LOGIN -->
    </div>
  </body>
</html>
