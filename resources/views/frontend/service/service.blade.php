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
    <link rel="stylesheet" href="/frontend/css/content.css" />
    <link rel="stylesheet" href="/frontend/css/news.css" />
    <link rel="stylesheet" href="/frontend/css/slider.css" />
    <link rel="stylesheet" href="/frontend/css/blog.css" />
    <link rel="stylesheet" href="/frontend/css/goidulich.css" />
    <link rel="stylesheet" href="/frontend/css/footer.css" />
    <link rel="stylesheet" href="/frontend/css/style.css" /> 
    <title>| GoodTrip Việt Nam</title>
  </head>
  <body>
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

      {{-- TÌM KIẾM --}}
      <div class="search-bar">
        <form action=" {{ route('service.search') }} " method="GET">
          <input type="text" name="location" placeholder="Nhập địa điểm..." required autofocus>
          <button type="submit"><i class="fas fa-search"></i> Tìm kiếm</button>
        </form>
      </div>

      <div class="packages">
        <div class="box-container">
          @foreach ($tours as $tour)
          <div class="box">
            <img src="{{ $tour->img }}" alt="" />
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> {{ $tour->name }}</h3>
              <p>{{ $tour->description }}</p>
              <strong><p>Ngày khởi hành: {{ $tour->start_date }}</p></strong>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">{{ $tour->price }} VND</div>
              <a href="{{ route('service.order', $tour->id) }}" class="btn">Đặt ngay</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <!-- ============================== -->
      @include('frontend.component.footer')
    </div>
  </body>
</html>
