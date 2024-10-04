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
    <link rel="stylesheet" href="/frontend/css/news.css" />
    <link rel="stylesheet" href="/frontend/css/slider.css" />
    <link rel="stylesheet" href="/frontend/css/blog.css" />
    <link rel="stylesheet" href="/frontend/css/goidulich.css" />
    <link rel="stylesheet" href="/frontend/css/footer.css" />
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
      <div id="newscontainer">
        <div class="header">
          <div class="introduct">
            <div class="container">
              <div class="content center">
                <h5 class="t-black">ĐI KHẮP VIỆT NAM</h5>
                <span class="line gold"></span>
                <h2 class="t-content">
                  CÙNG XEM QUA CÁC
                  <span class="t-gold">GÓI DU LỊCH</span>
                </h2>
                <h5 class="t-black bot-content">
                  XÁCH BALO LÊN VÀ ĐI THÔI NÀO!
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="packages">
        <div class="box-container">
          <div class="box">
            <img src="/frontend/img/goidulich/phuquoc.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Vũng Tàu</h3>
              <p>Tour Vũng Tàu 3N2D: HCM - Câu Cá - Lặn Ngắm San Hô</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">3.600.000 VND <span> 3.800.000 VND</span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>

          <div class="box">
            <img src="/frontend/img/goidulich/sapa.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Sapa</h3>
              <p>
                Tour Miền Bắc 4N3D: HCM - Hạ Long - Ninh Bình - Sapa - Hà Nội
                (TN)
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">6.900.000 VND <span> 7.200.000 VND</span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>

          <div class="box">
            <img src="/frontend/img/goidulich/vungtau1.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Vũng Tàu</h3>
              <p>Tour Vũng Tàu 2N1D: HCM - Vũng Tàu - Suối Tiên - Hòn Rơm</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">1.600.000 VND <span>1.700.000 VND</span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>

          <div class="box">
            <img src="/frontend/img/goidulich/dalat.png" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Đà Lạt</h3>
              <p>Tour Đà Lạt 3N3D: Tà Đùng - Buôn Mê Thuột - Thác Dray Nu</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">2.390.000 VND <span>4.000.000 VND</span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>

          <div class="box">
            <img src="/frontend/img/goidulich/sanho.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Vũng Tàu</h3>
              <p>Tour Vũng Tàu 2N2D: Lặn Ngắm San Hô - BBQ - Vườn Nho</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">1.490.000 VND <span>1.600.000 VND</span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>

          <div class="box">
            <img src="/frontend/img/goidulich/dao.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Vũng Tàu</h3>
              <p>Tour Vũng Tàu 2N2D: Khám phá đảo Tôm Hùm Cano</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">2.300.000 VND <span>2.500.000 VND</span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>
          <div class="box">
            <img src="/frontend/img/goidulich/mientay.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Cần Thơ</h3>
              <p>Tour Miền Tây 4N3D: Châu Đốc - Cần Thơ - Cà Mau - Bạc Liêu</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">Hết chỗ <span></span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>
          <div class="box">
            <img src="/frontend/img/goidulich/nganhoa.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Đà Lạt</h3>
              <p>Tour Đà Lạt 3N3Đ: Khám Phá Thành Phố Ngàn Hoa</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">2.090.000 VND <span></span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>
          <div class="box">
            <img src="/frontend/img/goidulich/mieubachuaxu.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Miền Tây</h3>
              <p>
                Tour Miền Tây 1N1D: Miếu Bà Chúa Xứ - Rừng Tràm Trà Sư - KDL Mặt
                Trời An Hảo
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">990.000 VND <span>1.000.000 VND</span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>
          <div class="box">
            <img src="/frontend/img/goidulich/bentre.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Miền Tây</h3>
              <p>Tour Miền Tây 2N1D: HCM - Mỹ Tho - Bến Tre - Cần Thơ</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">1.200.000 VND <span></span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>
          <div class="box">
            <img src="/frontend/img/goidulich/sapa1.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Miền Bắc</h3>
              <p>Tour Miền Bắc 4N3D: Sài Gòn - Hoàng Su Phì - Y Tý - Sapa</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">Hết chỗ <span></span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>
          <div class="box">
            <img src="/frontend/img/goidulich/caonguyen.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Đà Lạt</h3>
              <p>
                Tour Đà Lạt 3N3D: Que Garden - Tiểu Nhật Bản Xứ Cao Nguyên (Tết)
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">Hết chỗ <span></span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>
          <div class="box">
            <img src="/frontend/img/goidulich/taynguyen.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Tây Nguyên</h3>
              <p>Tour Tây Nguyên 3N3D: Tà Đùng - Đà Lạt ( 2 Sao)</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">2.090.000 VND <span> 2.500.000 VND</span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>
          <div class="box">
            <img src="/frontend/img/goidulich/fansipan.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Sapa</h3>
              <p>Tour SaPa 3N2D: Chinh Phục Fansipan</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">3.990.000 VND <span></span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>
          <div class="box">
            <img src="/frontend/img/goidulich/duthuyen.jpg" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Vũng Tàu</h3>
              <p>
                Tour Cao Cấp Vũng Tàu 1/2N: Du Thuyền Emperor Ngắm Hoàng Hôn -
                Tiệc Cocktail
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">1.100.000 VND <span></span></div>
              <a href="{{ route('home.booking') }}" class="btn">Đặt ngay</a>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================== -->
      @include('frontend.component.footer')
    </div>
  </body>
</html>
