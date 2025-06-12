# Étape 1 : Image de base avec PHP et Apache
FROM php:8.2-apache

# Étape 2 : Installer les dépendances système
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip \
    libzip-dev libjpeg-dev libfreetype6-dev nodejs npm \
    dos2unix \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Étape 3 : Activer mod_rewrite pour Laravel
RUN a2enmod rewrite

# Étape 4 : Ajouter Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Étape 5 : Définir le répertoire de travail
WORKDIR /var/www/html

# Étape 6 : Copier les fichiers du projet
COPY . .

# Étape 7 : Convertir build.sh en format UNIX et l’exécuter
RUN dos2unix build.sh && chmod +x build.sh && ./build.sh

# Étape 8 : Droits d’accès
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Étape 9 : Exposer le port Apache
EXPOSE 80
