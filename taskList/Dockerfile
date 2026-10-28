FROM php:8.2-apache

# Instalar extensiones de MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Redirigir el DocumentRoot de Apache a la carpeta src
ENV APACHE_DOCUMENT_ROOT /var/www/html/src
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

# Copiar el proyecto
COPY . /var/www/html/