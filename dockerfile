FROM php:8.3.0beta2-fpm

# Instalamos las extensiones de PHP necesarias
RUN apt-get update && apt-get install -y libpq-dev libzip-dev libgd-dev \
    && docker-php-ext-install pdo pdo_mysql bcmath zip gd

# Establecemos el límite de memoria
RUN echo "memory_limit = 2048M" > /usr/local/etc/php/conf.d/memory-limit.ini
RUN echo "upload_max_filesize = 100M" > /usr/local/etc/php/conf.d/upload-max-filesize.ini
RUN echo "post_size_max = 100M" > /usr/local/etc/php/conf.d/post-size-max.ini

# Instalamos Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configuramos el contenedor
# WORKDIR /var/www/html

# Exponemos el puerto 80 para Nginx
EXPOSE 9000

# Iniciamos Nginx y PHP-FPM
CMD ["php-fpm"]