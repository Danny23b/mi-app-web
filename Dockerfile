FROM php:8.2-apache

# Instala extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia tu app al contenedor
COPY . /var/www/html/

# Da permisos adecuados
RUN chown -R www-data:www-data /var/www/html
