<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thông báo Đặt Hàng</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body class="text-center">
  <div class="container mt-5">
    <div class="alert alert-success" role="alert">
      <i class="bi bi-check-circle-fill"></i>
      <h4 class="alert-heading">Đặt tour thành công!</h4>
      <p>Cảm ơn {{$customerName}} đã đặt tour tại công ty của chúng tôi. 
        Vui lòng chuyển khoản số tiền <span class="fw-bold"><strong>{{$price}} VNĐ</strong></span> vào tài khoản sau:</p>
      <ul>
        <li><strong>Số tài khoản:</strong> 7420681254</li>
        <li><strong>Ngân hàng:</strong> BIDV</li>
        <li><strong>Chủ tài khoản:</strong> Công ty GOODTRIP</li>
      </ul>
      <p>
        Sau khi chuyển khoản chúng tôi sẽ gửi hóa đơn qua email này cho bạn, 
        cảm ơn bạn đã tin tưởng và chọn GOODTRIP, chúc bạn có chuyến đi thoải mái và vui vẻ.
        nếu sau 1 giờ thanh toán mà bạn không nhận được hóa đơn hãy liên hệ lại chúng tôi ngay:
        <a href="mailto:support@abc.com"> support@abc.com</a>
      </p>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>