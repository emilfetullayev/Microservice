FROM php:8.2-fpm

# Laravel üçün lazım olan PHP extensions
RUN apt-get update && apt-get install -y \
    zip unzip curl git libpng-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl

# Composer əlavə et
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Laravel app üçün direktoriyanı qeyd et
WORKDIR /var/www

# Kodları konteynerə kopyala
COPY . .

# Composer install
RUN composer install

# Storage icazələri
RUN chmod -R 755 storage
RUN chmod -R 755 bootstrap/cache

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000
