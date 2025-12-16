# Sử dụng image PHP kèm Apache
FROM php:8.1-apache

# Cài đặt extension mysqli để kết nối MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy toàn bộ code vào thư mục web của Apache trong container
COPY . /var/www/html/

# Cấp quyền (tùy chọn, để tránh lỗi permission)
RUN chown -R www-data:www-data /var/www/html