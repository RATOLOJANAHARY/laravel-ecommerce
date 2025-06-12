# Utilise l'image PHP officielle avec Apache
FROM php:8.2-apache

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip \
    libzip-dev libjpeg-dev libfreetype6-dev nodejs npm \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Activer le mod_rewrite
RUN a2enmod rewrite

# Copier composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier tous les fichiers dans le conteneur
COPY . .

# Copier les fichiers de config Apache personnalisés (si besoin)
# COPY ./docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Donner les droits d'accès à Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Lancer le script de build
RUN ./build.sh

# Exposer le port Apache
EXPOSE 80
