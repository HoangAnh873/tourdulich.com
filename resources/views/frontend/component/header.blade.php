<header id="header">
    <!-- Begin menu nav -->
    <div class="menu_top">
      <a href="{{ route('home.index') }}"><img src="/frontend/img/GoodTrip5.png" alt="Logonav" /></a>
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
        @if (Auth::guard('customer')->check())
          <a href="" id="login-link">
            {{ Auth::guard('customer')->user()->name}}
          </a>
        @else
          <a href="{{ route('login.index') }}" id="login-link">
            Đăng Nhập
          </a>
        @endif
      </div>
      <script>
        document.getElementById('login-link').addEventListener('click', function(event) {
            if ({{ Auth::guard('customer')->check() }}) {
                event.preventDefault();
                alert('Bạn đã đăng nhập rồi!');
            }
          });
      </script>
    </div>

    <!-- End menu nav -->
  </header>