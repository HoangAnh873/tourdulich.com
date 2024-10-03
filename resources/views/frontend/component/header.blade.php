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