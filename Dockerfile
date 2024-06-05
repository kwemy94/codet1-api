# Utilisez l'image PHP officielle
FROM php:8.1-fpm

# Installez les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev

# Installez Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiez les fichiers de votre application dans le conteneur
COPY . /var/www/html

# Installez les dépendances de l'application
RUN composer install

# Exposez le port 9000 pour PHP-FPM
EXPOSE 9000

# Démarrez PHP-FPM
CMD ["php-fpm"]
