FROM phpdockerio/php72-fpm:latest

RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.2-mysql php-redis php7.2-sqlite3 php7.2-bcmath php7.2-bz2 \
    && php7.2-gd php7.2-imap php-imagick php7.2-mbstring php-yaml php-xdebug \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

WORKDIR "/var/www/docker-yii2-example"