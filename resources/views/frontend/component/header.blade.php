<header id="header">
    <!-- Begin menu nav -->
    <div class="menu_top">
      <a href="index.html"><img src="/frontend/img/GoodTrip5.png" alt="Logonav" /></a>
      <ul id="nav">
        <li><a href="index.html">Trang chủ</a></li>
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