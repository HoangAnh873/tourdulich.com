# 🌟 Dự Án Quản Lý Tour Du Lịch  

## 1. Giới Thiệu  
Dự án **Quản Lý Tour Du Lịch** là một hệ thống giúp quản trị viên dễ dàng quản lý các tour du lịch, trong khi khách hàng có thể **tìm kiếm, đặt tour trực tuyến**, nhận thông báo qua email và thực hiện thanh toán tiện lợi.  

## 2. Công Nghệ Sử Dụng  
- **Backend:** Laravel (PHP)  
- **Frontend:** Blade Template, HTML, CSS, JavaScript  
- **Cơ sở dữ liệu:** MySQL  
- **Gửi email:** Laravel Mail  
- **Thanh toán:** Chuyển khoản ngân hàng  

## 3. Chức Năng Chính  
### 💼 **Dành cho Quản Trị Viên (Admin)**  
- Quản lý danh sách tour: **Thêm, sửa, xóa tour**  
- Quản lý danh mục **địa điểm du lịch**  
- Duyệt các tour mới do đối tác tạo  
- Gửi thông báo xác nhận qua email cho khách hàng  
- Quản lý **đơn đặt tour** và **thanh toán**  

### 💼 **Dành cho Khách Hàng**  
- **Tìm kiếm tour** theo địa điểm  
- **Đặt tour trực tuyến**  
- **Thanh toán nhanh chóng** qua tài khoản ngân hàng  
- Nhận **email xác nhận đơn hàng**  
- Theo dõi **lịch trình tour đã đặt**  

---

## 🛠 4. Hướng Dẫn Cài Đặt & Chạy Dự Án  

### 📂 **1. Clone repository về máy**  
```sh  
git clone <repo_url>  
cd tourdulich.com  
```

### 📂 **2. Cài đặt dependencies**  
```sh  
composer install  
```

### 📂 **3. Cấu hình môi trường**  
- Copy file **`.env.example`** thành **`.env`**  
- Chỉnh sửa thông tin kết nối **database** trong `.env`  
- Tạo APP_KEY bằng lệnh:  
```sh  
php artisan key:generate  
```

### 📂 **4. Tạo cơ sở dữ liệu**  
```sh  
php artisan migrate  
```

### 📂 **5. Chạy server**  
```sh  
php artisan serve  
```

### 📂 **6. Chạy Seeder để tạo tài khoản mặc định**  

📍 **Tạo tài khoản khách hàng:**  
```sh  
php artisan db:seed --class=CustomerSeeder  
```
📅 **Tài khoản khách hàng:**  
✉ **Email:** customer@example.com  
🔑 **Mật khẩu:** 123456  

📍 **Tạo tài khoản admin:**  
```sh  
php artisan db:seed --class=UserSeeder  
```
📅 **Tài khoản admin:**  
✉ **Email:** admin@example.com  
🔑 **Mật khẩu:** 123456  

---

## 🏁 7. Truy Cập Hệ Thống  
🌍 **Trang chủ:** Mở trình duyệt và truy cập `http://127.0.0.1:8000/`  
🔐 **Trang đăng nhập Admin:** **Thêm `/admin` vào URL**  

---

## 📧 Liên Hệ  
📩 Nếu có bất kỳ câu hỏi hoặc cần hỗ trợ, vui lòng liên hệ qua email: **[hoanganhh080703@gmail.com]**  

💡 **✨ Cảm ơn bạn đã sử dụng hệ thống! ✨** 🚀

