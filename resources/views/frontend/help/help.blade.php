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
    <link rel="stylesheet" href="/frontend/css/booking.css" />
    <link rel="stylesheet" href="/frontend/css/blog.css" />
    <link rel="stylesheet" href="/frontend/css/footerside.css" />
    <link rel="stylesheet" href="/frontend/css/contact.css">
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
        <!-- Contact -->
        <div class="menu-contact">
          <a href="/index.html"></a> / <p class="menu-1"></p>
        </div>
        <!-- contact -->
        <div class="contact-main">
          <ul class="contact">
              <h3 class="h3">CONTACT</h3>
              <li>Hotline: 0382787268</li>
              <li>IG: @goodtripvina</li>
              <li>FB: <a href="https://www.facebook.com/GoodTrip-112627521317796">FB.COM/GoodTrip</a></li>
              <li>Chi nhánh I: 445 Sư Vạn Hạnh, P.12, Q.10, TP.HCM.</li>
              <li>Chi nhánh II: 48 Trần Quang Diệu, P.14, Q.3, TP.HCM.</li>
              <li>Chi nhánh III: 350 Điện Biên Phủ, P.17, Q. Bình Thạnh, TP.HCM.</li>
              <li>Chi nhánh IV: G-Town 2, 136 Nguyễn Hồng Đào, P.14, Q.Tân Bình, TP.HCM.</li>
              <li>Chi nhánh V: 463 Quang Trung, P.10, Q. Gò Vấp, TP.HCM.</li>
              <li>Chi nhánh VI: TNP - 26 Lý Tự Trọng, P. Bến Nghé, Q.1, TP.HCM.</li>
              <li>Chi nhánh VII: TNP (Sense Market) - Đối Diện Số 90 Lê Lai, P. Bến Nghé, Q.1, TP.HCM.</li>
              <li>Chi nhánh VIII: TNP Hanoi - Vincom Bà Triệu, Tầng 7, Tháp 2, 191 Bà Triệu, Lê Đại Hành, Hai Bà Trưng, Hà
                  Nội.</li>
              <li>Chi nhánh IX: 48 Đường Thành, Cửa Đông, Hoàn Kiếm, Hà Nội.</li>
              <li>Chi nhánh X: Cần Thơ: Shop House Vincom Xuân Khánh, PG2-08, Đường 30 tháng 4, Xuân Khánh, Cần Thơ.</li>
              <li>Chi nhánh XI: Biên Hoà: Shop House Vincom Biên Hoà,PG2-06, 1096 Phạm Văn Thuận, Tân Mai, Biên Hoà.</li>
          </ul>
        </div>
      </div>

      <!-- ============================== -->

      @include('frontend.component.footer')
    </div>
  </body>
</html>
