FROM php:8.2-fpm-alpine

# Composer
COPY --from=composer:2.8.1 /usr/bin/composer /usr/bin/composer

# Dependencies
RUN apk add --no-cache $PHPIZE_DEPS linux-headers icu-dev libpng-dev libjpeg-turbo-dev libwebp-dev libxpm-dev postgresql-dev imagemagick-dev freetype-dev libzip-dev gd

# xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

# imagick
RUN pecl install imagick && docker-php-ext-enable imagick

# xdebug.mode = debug
COPY conf.d/* $PHP_INI_DIR/conf.d/

# Extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp && \
    docker-php-ext-install -j$(nproc) intl bcmath opcache pdo pdo_pgsql gd pgsql

# Set working directory
WORKDIR /var/www

# Set entrypoint
ENTRYPOINT ["php-fpm"]
