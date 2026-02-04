FROM php:8.4-apache

RUN docker-php-ext-install -j "$(nproc)" opcache

RUN set -ex; \
  { \
    echo "memory_limit = -1"; \
    echo "max_execution_time = 0"; \
    echo "upload_max_filesize = 32M"; \
    echo "post_max_size = 32M"; \
    echo "opcache.enable = On"; \
    echo "opcache.validate_timestamps = Off"; \
    echo "opcache.memory_consumption = 32"; \
  } > "$PHP_INI_DIR/conf.d/cloud-run.ini"

WORKDIR /var/www/html
COPY . .

RUN chown -R www-data:www-data /var/www/html
RUN sed -i 's|/var/www/html|/var/www/html/public|g' \
  /etc/apache2/sites-available/000-default.conf

RUN echo '<Directory "/var/www/html/src">' \
         '\n  Require all denied' \
         '\n</Directory>' \
    >> /etc/apache2/apache2.conf

RUN echo '<Directory "/var/www/html/public">' \
         '\n  AllowOverride All' \
         '\n</Directory>' \
    >> /etc/apache2/apache2.conf


RUN echo "ErrorDocument 404 /404.php" \
  >> /etc/apache2/sites-available/000-default.conf

RUN echo '<Files "404.php">' \
         '\n  Require all denied' \
         '\n</Files>' \
    >> /etc/apache2/apache2.conf

RUN sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf

RUN a2enmod rewrite
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
