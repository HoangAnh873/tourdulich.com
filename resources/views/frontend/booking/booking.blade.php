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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>| GoodTrip Việt Nam</title>
  </head>
  <body>

    {{-- bắt sự kiện khi chọn tour thì sẽ hiển thị giá trị ngày bd và ngày kt của tour đó --}}
    <script>
        $(document).ready(function() {
            $('#tourSelect').change(function() {
                const tourId = $(this).val();
                if (tourId) {
                    $.ajax({
                        url: '/home/booking/tour/' + tourId, // Thay thế bằng URL đúng
                        method: 'GET',
                        success: function(response) {
                            $('#start_date').val(response.start_date);
                            $('#end_date').val(response.end_date);
                        },
                        error: function(error) {
                            console.error('Lỗi khi lấy thông tin tour:', error);
                        }
                    });
                }
            });
        });
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

            <form action="{{ route('customer.booking') }}" method="post" >
              @csrf
              <div class="inputBox">
                  <h3>Bạn muốn đi đâu?</h3>
                  <select name="tour_name" id="tourSelect">
                      <option value="">Chọn tour</option>
                      @foreach($tours as $tour)
                          <option value="{{ $tour->id }}">{{ $tour->name }}</option>
                      @endforeach
                  </select>
              </div>
              <div class="inputBox">
                  <h3>Có bao nhiêu người cùng tham gia?</h3>
                  <input type="number" name="quantity" placeholder="số người tham gia du lịch" />
              </div>
              <div class="inputBox">
                  <h3>Ngày bắt đầu chuyến đi?</h3>
                  <input type="date" id="start_date" name="start_date" disabled >
              </div>
              <div class="inputBox">
                  <h3>Ngày kết thúc chuyến đi?</h3>
                  <input type="date" id="end_date" name="end_date" disabled >
              </div>
              <input type="submit" class="btn" value="Đặt ngay"/>
          </form>

        </div>
      </div>
      <!-- End Booking -->
      <!-- ============================== -->
      @include('frontend.component.footer')
    </div>
  </body>
</html>
