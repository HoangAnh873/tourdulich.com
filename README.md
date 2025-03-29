Dự Án Quản Lý Tour Du Lịch

Giới Thiệu

Dự án này là một hệ thống quản lý tour du lịch, giúp quản trị viên dễ dàng quản lý các tour du lịch, khách hàng có thể tìm kiếm và đặt tour trực tuyến. Hệ thống hỗ trợ đầy đủ các chức năng quản lý, duyệt tour, thông báo qua email, và thanh toán trực tuyến.

Công Nghệ Sử Dụng

Backend: Laravel (PHP)

Frontend: Blade Template, HTML, CSS, JavaScript

Cơ sở dữ liệu: MySQL

Gửi email: Laravel Mail

Thanh toán: tài khoản ngân hàng.

Chức Năng Chính

1. Quản Trị Viên (Admin)

Quản lý danh sách tour du lịch: Thêm, sửa, xóa tour.

Quản lý danh mục địa điểm du lịch.

Duyệt các tour mới do đối tác tạo.

Gửi thông báo duyệt thành công qua email cho khách hàng.

Quản lý đơn đặt tour và thanh toán.

2. Khách Hàng

Tìm kiếm tour theo địa điểm.

Đặt tour trực tuyến.

Thanh toán qua tài khoản ngân hàng.

Nhận email xác nhận đơn hàng.

Theo dõi lịch trình tour đã đặt.

Cài Đặt & Chạy Dự Án

1. Clone repository

 git clone <repo_url>
 cd tourdulich.com

2. Cài đặt dependencies

composer install

3. Cấu hình môi trường

Copy file .env.example thành .env

Chỉnh sửa thông tin kết nối database trong .env
tạo APP_KEY bằng lệnh: php artisan key:generate  
4. Tạo cơ sở dữ liệu

php artisan migrate

5. Chạy server

php artisan serve

6. Chạy lệnh seeder để tạo tài khoản cho khách và admin
đầu tiên chạy lệnh:
php artisan db:seed --class=CustomerSeeder

sau khi chạy lệnh trên xong thì đã tạo được một tài khoản khách hàng
email: customer@example.com
pass: 123456

tiếp theo chạy lệnh: 
php artisan db:seed --class=UserSeeder

sau khi chạy lệnh trên xong thì đã tạo được một tài khoản admin
email: admin@example.com
pass: 123456

7. Để chuyển hướng đến trang đăng nhập admin bạn phải thêm đường dẫn /admin lên url với url hiện tại đang ở trang chủ.


Liên Hệ với tôi nếu có bất kỳ câu hỏi hoặc vấn đề nào, vui lòng liên hệ qua email: [hoanganhh080703@gmail.com].

Liên Hệ

Nếu có bất kỳ câu hỏi hoặc vấn đề nào, vui lòng liên hệ qua email: [hoanganhh080703@gmail.com].


✨ Cảm ơn bạn đã sử dụng hệ thống! ✨
