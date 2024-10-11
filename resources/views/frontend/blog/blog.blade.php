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
    <link rel="stylesheet" href="/frontend/css/blogside.css" />
    <link rel="stylesheet" href="/frontend/css/footerside.css" />
    <title>| GoodTrip Việt Nam</title>
  </head>
  <body>
    <div id="main">
      @include('frontend.component.header')
      <!-- BAT DAU BLOG -->
      <div id="blog">
        <!-- hEADER OF BLOG -->
        <div class="header">
          <div class="introduct">
            <div class="container">
              <div class="content center">
                <h5 class="t-black">ĐI KHẮP VIỆT NAM</h5>
                <span class="line gold"></span>
                <h2 class="t-content">
                  NƠI ĐÂY SẼ CẬP NHẬT
                  <span class="t-gold">BLOG</span>
                  MỖI NGÀY
                </h2>
                <h5 class="t-black bot-content">
                  ĐÓN CHỜ CÁC TIN TỨC TỪ NHỮNG ĐỊA ĐIỂM DU LỊCH
                </h5>
              </div>
            </div>
          </div>
        </div>
        <!-- END HEADER OF BLOG -->
        <!-- 1 -->
        <div class="container-blog center">
          <div class="container-header"></div>
          <div class="container-news">
            <div class="product-blog">
              <a href=""
                ><img
                  src="/frontend/img/kinh-nghiem-du-lich-sapa-cung-gia-dinh.jpg"
                  alt=""
                  class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">
                    Kinh nghiệm du lịch sapa 3 ngày 2 đêm từ A - Z
                  </h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/da-lat-mua-xuan.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">
                    Thời điểm thích hợp nhất để đi Đà Lạt là mùa xuân
                  </h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-blog">
              <a href=""
                ><img
                  src="/frontend/img/CamnangdulichVungTau.jpg"
                  alt=""
                  class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">
                    Cất túi ngay cuốn cẩm nang du lịch Vũng Tàu 2022
                  </h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 2 -->
        <div class="container-blog center">
          <div class="container-header"></div>
          <div class="container-news">
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/sapa.1jpg.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">
                    Du khách chụp ảnh phong cách Tây Tạng ở Sa Pa
                  </h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/danang1.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">
                    Đà Nẵng có năng lực cạnh tranh du lịch cao nhất cả nước
                  </h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/vungtau1.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">
                    Các điểm đến tại Bà Rịa - Vũng Tàu giảm đến 80% phí dịch vụ
                  </h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 3 -->
        <div class="container-blog center">
          <div class="container-header"></div>
          <div class="container-news">
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/vungtau2.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">
                    Bà Rịa - Vũng Tàu quảng bá du lịch trên sóng BBC
                  </h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/cantho1.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">Miền quê đưa khách 'du hành' về quá khứ</h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/sapa3.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">Mai anh đào nở rộ tại Sapa</h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 4 -->
        <div class="container-blog center">
          <div class="container-header"></div>
          <div class="container-news">
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/sapa2.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">Tuyết rơi trên đỉnh Fansipan</h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/cantho2.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">
                    Quán ăn miền Tây cho khách ngồi giữa đồng lúa
                  </h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/danang2.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">
                    Cầu Vàng Đà Nẵng được ví như cảnh phim viễn tưởng
                  </h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 5 -->
        <div class="container-blog center">
          <div class="container-header"></div>
          <div class="container-news">
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/danang3.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">4 cây cầu có thiết kế đặc biệt của Đà Nẵng</h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/vungtau3.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">Vũng Tàu hoãn 2 sự kiện lớn vì Covid-19</h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/cantho3.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">5 thức bánh sắc màu của người miền Tây</h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 6 -->
        <div class="container-blog center" style="height: 48rem">
          <div class="container-header"></div>
          <div class="container-news">
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/danang4.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">Đà Nẵng trong sương mây</h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/sapa4.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">
                    5 cung leo núi miền Bắc cho ngày đầu năm 2022
                  </h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-blog">
              <a href=""
                ><img src="/frontend/img/blog/cantho4.jpg" alt="" class="blog-img"
              /></a>
              <div class="blog-content">
                <a href="">
                  <h4 class="">Chợ nổi qua lăng kính của du khách Tây</h4>
                </a>
                <div class="blog-detail">
                  <div class="info">By: Pham Gia Hào</div>
                  <div class="info2">
                    <div class="date">
                      <i class="fas fa-clock"></i>20/1/2022
                    </div>
                    <div class="view"><i class="fas fa-eye"></i>999 view</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END BLOG -->
      @include('frontend.component.footer')
    </div>
  </body>
</html>
