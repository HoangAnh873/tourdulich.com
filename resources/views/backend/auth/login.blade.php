<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>LOGIN GOODTRIP MANAGER</title>

        <link href="backend/css/bootstrap.min.css" rel="stylesheet">
        <link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="backend/css/animate.css" rel="stylesheet">
        <link href="backend/css/style.css" rel="stylesheet">
        <link href="backend/css/customize.css" rel="stylesheet">

    </head>

    <body class="gray-bg">

        <div class="loginColumns animated fadeInDown">
            <div class="row">

                <div class="col-md-6">
                    <h2 class="font-bold">QUẢN LÝ GOODTRIP</h2>
                    <hr>
                    <p>
                        Giao diện quản lý chuyên nghiệp, hiệu quả.
                    </p>
                    <p>
                        Công cụ quản lý tour du lịch toàn diện.
                    </p>
                    <p>
                        Hệ thống quản lý du lịch thông minh.
                    </p>
                    

                </div>
                <div class="col-md-6">
                    <div class="ibox-content">
                        <form method="post" class="m-t" role="form" action="
                        {{ route('auth.login') }}">
                         @csrf
                         <div class="form-group">
                            <input 
                                type="text" 
                                name="email"
                                class="form-control" 
                                placeholder="Email" 
                                value="{{ old('email') }}"
                            >
                            @if ($errors->has('email'))
                                <span class="error-message">* {{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input 
                                type="password" 
                                name="password"
                                class="form-control" 
                                placeholder="Password" 
                            >
                            @if ($errors->has('password'))
                                <span class="error-message">* {{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        
                        <button type="submit" class="btn btn-primary block full-width m-b">Đăng nhập</button>

                            {{-- <a href="#">
                                <small>Forgot password?</small>
                            </a> --}}

                            
                        </form>
                        <p class="m-t">
                            <small>Newbie Code we app framework base on Bootstrap 3 &copy; 2014</small>
                        </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-6">
                    Copyright Example Company
                </div>
                <div class="col-md-6 text-right">
                <small>© 2024</small>
                </div>
            </div>
        </div>

    </body>

</html>
