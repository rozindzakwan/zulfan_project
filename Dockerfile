FROM php:8.0-apache

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libwebp-dev \
    libjpeg62-turbo-dev \
    libpng-dev libxpm-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zlib1g-dev \
    zip \
    unzip \
    nano \
    libc-client-dev libkrb5-dev \
    && rm -r /var/lib/apt/lists/*

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd
#    --with-gd \
#    --with-webp-dir \
#    --with-jpeg-dir \
#    --with-png-dir \
#    --with-zlib-dir \
#    --with-xpm-dir \
#    --with-freetype-dir

# Install PHP extensions
RUN docker-php-ext-install gd pdo pdo_mysql mbstring exif pcntl bcmath mysqli zip intl

RUN pecl install redis && docker-php-ext-enable redis

RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install imap

RUN cd /usr/local/etc/php/conf.d/ && \
  echo 'memory_limit = 1024M\nupload_max_filesize = 512M\npost_max_size = 512M\nmax_execution_time = 3000\nerror_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT' >> /usr/local/etc/php/conf.d/docker-php-ram-limit.ini

RUN a2enmod rewrite

# To run files with the same group as your primary user
RUN useradd -G www-data,root -u $uid -d /home/$user $user && usermod -aG $user www-data
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /var/www/html/

USER $user
