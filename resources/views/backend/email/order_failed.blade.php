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
      <h4 class="alert-heading">Đặt tour thất bại!</h4>
      <p>Xin lỗi {{$customerName}} hiện tại tour bạn chọn đã hết chỗ bạn có thể chọn lại một tour khác nhé.</p>
      <p>
        Nếu có thắc mắc hoặc khó khăn gì bạn hãy liên hệ lại chúng tôi ngay:
        <a href="mailto:support@abc.com"> support@abc.com</a>
      </p>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>