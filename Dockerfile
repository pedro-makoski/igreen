# Use a imagem oficial do PHP com Apache
FROM php:8.4-apache

# 1. Configurar PHP para Cloud Run (Opcache e limites)
RUN docker-php-ext-install -j "$(nproc)" opcache
RUN set -ex; \
  { \
    echo "; Cloud Run enforces memory & timeouts"; \
    echo "memory_limit = -1"; \
    echo "max_execution_time = 0"; \
    echo "; File upload at Cloud Run network limit"; \
    echo "upload_max_filesize = 32M"; \
    echo "post_max_size = 32M"; \
    echo "; Configure Opcache for Containers"; \
    echo "opcache.enable = On"; \
    echo "opcache.validate_timestamps = Off"; \
    echo "; Configure Opcache Memory"; \
    echo "opcache.memory_consumption = 32"; \
  } > "$PHP_INI_DIR/conf.d/cloud-run.ini"

# 2. Configurar o DocumentRoot para /public e tratar erros/privacidade
# - Muda a raiz do site para a pasta /public
# - Bloqueia o acesso à pasta /src que está dentro de /public
# - Configura o 404 personalizado
RUN set -ex; \
    sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf; \
    sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf; \
    { \
        echo "ErrorDocument 404 /404.php"; \
        echo "<Directory /var/www/html/public/src>"; \
        echo "    Order deny,allow"; \
        echo "    Deny from all"; \
        echo "</Directory>"; \
    } >> /etc/apache2/apache2.conf

# 3. Copiar o código para o container
WORKDIR /var/www/html
COPY . ./

# 4. Ajustar permissões e porta
RUN chown -R www-data:www-data /var/www/html
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# 5. PHP em modo produção (recomendado para Cloud Run)
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Se ainda precisar de desenvolvimento para testes locais, comente a linha acima 
# e descomente a de baixo:
# RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"