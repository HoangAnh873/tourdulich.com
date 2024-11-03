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
    <link rel="stylesheet" href="/frontend/css/slider.css" />
    <link rel="stylesheet" href="/frontend/css/bookingside.css" />
    <link rel="stylesheet" href="/frontend/css/blog.css" />
    <link rel="stylesheet" href="/frontend/css/footerside.css" />
    <link rel="stylesheet" href="/frontend/css/style.css" /> 
    <title>| GoodTrip Việt Nam</title>
  </head>
  <body>

    {{-- Dùng để khóa giá trị ngày bắt đầu và ngày kết thúc không cho thay đổi --}}
    <script>
      window.onload = function() {
          var nameInput = document.getElementsByName("name")[0];
          var startDateInput = document.getElementsByName("start_date")[0];
          var endDateInput = document.getElementsByName("end_date")[0];

          nameInput.disabled = true;
          startDateInput.disabled = true;
          endDateInput.disabled = true;
      };
    </script>

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
          <form action="{{ route('customer.order', [$tour->id, $customer->id] )}}" method="post">
            @csrf
            <div class="inputBox">
              <h3>Bạn muốn đi đâu?</h3>
              <input type="text" placeholder="chọn một địa điểm" name="name" value="{{ $tour->name}}"/>
            </div> 
            <div class="inputBox">
              <h3>Bạn đặt bao nhiêu thành viên?</h3>
              <input type="number" name="quantity" placeholder="số người tham gia du lịch" value="" />
            </div>
            <div class="inputBox">
              <h3>Ngày bắt đầu (tháng/ngày/năm)</h3>
              <input type="date" name="start_date" value="{{ $tour->start_date }}"/>
            </div>
            <div class="inputBox">
              <h3>Ngày kết thúc (tháng/ngày/năm)</h3>
              <input type="date" name="end_date" value="{{ $tour->end_date }}"/>
            </div>
            <input
              type="submit"
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
