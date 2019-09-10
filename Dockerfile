FROM php:7.2.2-fpm

RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl
RUN pecl install mcrypt-1.0.2
RUN docker-php-ext-enable mcrypt
RUN docker-php-ext-install pdo mbstring

# Caso necessário, instalar composer
#RUN apt-get install -y curl
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app
COPY . /app

# Caso necessário, instalar composer
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8000

EXPOSE 8000