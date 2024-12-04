# Используем официальный PHP-образ с FPM и необходимыми расширениями
FROM php:8.1-fpm

# Установка системных зависимостей и PHP-расширений
RUN apt-get update && apt-get install -y \
    zip unzip git curl \
    && docker-php-ext-install pdo_mysql

# Установка Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Установка рабочей директории
WORKDIR /var/www

# Копирование файлов проекта
COPY . .

# Установка зависимостей Composer
RUN composer install --no-scripts --no-autoloader

# Установка прав доступа к папкам storage и bootstrap/cache
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Открытие порта для встроенного сервера Laravel
EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000
