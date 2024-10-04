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
    @include('frontend.component.script')
    
    <div id="main">
      @include('frontend.component.header')
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
      @include('frontend.component.footer')
    </div>
  </body>
</html>
