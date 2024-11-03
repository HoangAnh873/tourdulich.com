<header id="header">
    <!-- Begin menu nav -->
    <div class="menu_top">
      <a href="{{ route('home.index') }}"><img src="/frontend/img/GoodTrip5.png" alt="Logonav" /></a>
      <ul id="nav">
        <li class="{{ request()->routeIs('home.index') ? 'active' : '' }}"><a href="{{ route('home.index') }}">Trang chủ</a></li>
        <li class="{{ request()->routeIs('home.service') ? 'active' : '' }}"><a href="{{ route('home.service') }}">Gói tour</a></li>
        <li class="{{ request()->routeIs('home.booking') ? 'active' : '' }}"><a href="{{ route('home.booking') }}">Booking</a></li>
        <li class="{{ request()->routeIs('home.blog') ? 'active' : '' }}"><a href="{{ route('home.blog') }}">blog</a></li>
        <li class="{{ request()->routeIs('home.help') ? 'active' : '' }}"><a href="{{ route('home.help') }}">Hỗ trợ</a></li>
        @if (Auth::guard('customer')->check())
        <li><a href="{{ route('logout') }}">Đăng Xuất</a></li>
        @endif
      </ul>

    {{-- Xử lí phần active của tiêu đề --}}
    <script>
      const navLinks = document.querySelectorAll('#nav li a');

      navLinks.forEach(link => {
          link.addEventListener('click', (event) => {
              // Xóa class active khỏi tất cả các thẻ li
              navLinks.forEach(link => link.classList.remove('active'));

              // Thêm class active cho thẻ li vừa được click
              event.target.parentElement.classList.add('active');
          });
      });
    </script>

      <!-- User -->
      <div
        class="user-section"
        {{-- onclick="alert('Hãy đăng nhập để sử dụng dịch vụ')" --}}
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