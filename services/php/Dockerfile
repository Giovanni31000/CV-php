FROM php:fpm

# Mise à jour des paquets et installation des dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier les fichiers de l'application dans le conteneur
COPY . /var/www/html

# Définir le répertoire de travail
WORKDIR /var/www/html

# Attribuer les permissions nécessaires
RUN chown -R www-data:www-data /var/www/html

# Installation des dépendances PHP via Composer
RUN composer install --no-dev --optimize-autoloader

# Exposition du port
EXPOSE 9000

# Commande de démarrage
CMD ["php-fpm"]
