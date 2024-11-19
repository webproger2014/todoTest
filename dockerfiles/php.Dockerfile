FROM php:8.3-fpm

# Устанавливаем рабочую директорию
WORKDIR /var/www/laravel

# Обновляем пакеты, устанавливаем необходимые зависимости и расширения для PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql \
    && rm -rf /var/lib/apt/lists/*
