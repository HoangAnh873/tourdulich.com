<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link rel="stylesheet" href="icon/themify-icons/themify-icons.css" /> --}}
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
    <div id="main">
      <header id="header">
        <!-- Begin menu nav -->
        @include('frontend.component.header')
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
                  <p><a >Quên mật khẩu?</a></p>
                </div>
              </div>
              <div class="login-bot">
                <input type="submit" value="Đăng Ký" />
              </div>
              <div class="another-login">
                <div class="mxh">
                  <a  class="primary-btn"
                    ><i class="fab fa-facebook-square" aria-hidden="true"></i
                  ></a>
                  <a  class="primary-btn"><i class="fab fa-google"></i></a>
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
