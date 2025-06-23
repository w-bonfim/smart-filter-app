FROM php:8.2-apache

RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Instala dependências do sistema
RUN apt-get update && apt-get install -y \
    zip unzip curl libzip-dev libonig-dev libxml2-dev git \
    && docker-php-ext-install pdo_mysql zip

# Ativa mod_rewrite do Apache
RUN a2enmod rewrite

# Define diretório de trabalho
WORKDIR /var/www/html

# Copia arquivos da aplicação
COPY . /var/www/html

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Ajusta permissões
RUN chown -R www-data:www-data /var/www/html

# Cria o .htaccess
RUN echo "<Directory /var/www/html>\nAllowOverride All\n</Directory>" > /etc/apache2/conf-available/override.conf && \
    a2enconf override

EXPOSE 80
