Tài khoản

Đăng nhập admin -> http://127.0.0.1:8000/admin

Quản trị viên
Email: admin@gmail.com
Pass : admin123456

Nhân viên phục vụ
Email: nvphucvu@gmail.com
Pass : admin123456

Nhân viên bếp
Email: nvbep@gmail.com
Pass : admin123456

Đăng nhập khách hàng -> http://127.0.0.1:8000/dang-nhap

Khách hàng
Email: khachhang@gmail.com
Pass : admin123456

9/05

hướng dẫn setup:
Bước 1
Cài đầy đủ các file
Mysql-trên máy
Composer
Php
Bước 2 export database vào mysql
Bước 3 mở code và chạy php artisan serve
Lúc này sẽ lỗi
Mở file php.ini ở php tìm extension=pdo_mysql xoá dấu ; ở đầu đi xong save
Restart lại và chạy là đk
