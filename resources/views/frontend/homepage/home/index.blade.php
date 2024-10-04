@extends('frontend.homepage.layout')

@section('content')
<div id="content">
  <!-- Banner content -->
  <div class="introduct">
    <div class="container">
      <div class="content center">
        <h5 class="t-black">ĐI KHẮP VIỆT NAM</h5>
        <span class="line gold"></span>
        <h2 class="t-content">
          HÃY CÙNG NHAU ĐI
          <span class="t-gold">DU LỊCH</span>
        </h2>
        <div id="4diemden"></div>
        <h5 class="t-black bot-content">CHỌN CHO MÌNH MỘT ĐIỂM ĐẾN</h5>
      </div>
    </div>
  </div>

  <div class="layout-content">
    <div class="box-container">
      <div class="box">
        <img src="/frontend/img/TayBacBaner.png" alt="img-left" />
        <div class="content">
          <h3>SAPA</h3>
          <p>
            Sapa là “nơi gặp gỡ giữa trời và đất” cảnh sắc thiên nhiên
            hùng vĩ bậc nhất miền Bắc
          </p>
          <a href="{{ route('home.sapa') }}" class="btn">ĐẾN ĐÓ</a>
        </div>
      </div>
    </div>
    <div class="box-container">
      <div class="box">
        <img src="/frontend/img/DaLatbanner.jpg" alt="img-left" />
        <div class="content">
          <h3>ĐÀ LẠT</h3>
          <p>
            Đà lạt nổi tiếng với các đồi thông và "lời nguyền chia tay"
            của các cặp đôi!
          </p>
          <a href="{{ route('home.dalat') }}" class="btn">ĐẾN ĐÓ</a>
        </div>
      </div>
    </div>
    <div class="box-container">
      <div class="box">
        <img src="/frontend/img/DaNang.png" alt="img-left" />
        <div class="content">
          <h3>VŨNG TÀU</h3>
          <p>
            Vũng Tàu từ lâu đã nổi tiếng với những bãi tắm đẹp và vô vàng
            những món ăn ngon.
          </p>
          <a href="{{ route('home.vungtau') }}" class="btn">ĐẾN ĐÓ!</a>
        </div>
      </div>
    </div>
    <div class="box-container">
      <div class="box">
        <img src="/frontend/img/MienTayBanner.png" alt="img-left" />
        <div class="content">
          <h3>CẦN THƠ</h3>
          <p>
            Cần Thơ được gọi là xứ Tây Đô. Nổi tiếng với cảnh sắc phong
            phú và trong lành.
          </p>
          <a href="{{ route('home.cantho') }}" class="btn">ĐẾN ĐÓ!</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End banner content -->
</div>
@endsection