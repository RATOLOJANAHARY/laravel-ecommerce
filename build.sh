#!/usr/bin/env bash
set -e

echo "🔧 Lancement du script build.sh pour Laravel"

# Installer les dépendances PHP
composer install --no-dev --optimize-autoloader

# Installer les dépendances npm (Bootstrap 4, etc.)
npm install
npm run production

# Générer la clé d'application si absente
if [ -z "$APP_KEY" ]; then
  php artisan key:generate
fi

# Migration + caches
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Déploiement Laravel terminé"
