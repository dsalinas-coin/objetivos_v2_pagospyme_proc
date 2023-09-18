FROM php:7.0-apache 

ARG UID

# La siguiente linea es para evita el siguiente error -------> failed to solve: process "/bin/sh -c apt-get update" did not complete successfully: exit code: 100
RUN echo "deb http://archive.debian.org/debian stretch main" > /etc/apt/sources.list

# Install packages and PHP extensions
RUN apt update \
    && apt install -y vim \
    && apt install -y git acl openssl openssh-client wget zip vim libssh-dev \
    && apt install -y libpng-dev zlib1g-dev libzip-dev libxml2-dev libicu-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip \
    && docker-php-ext-enable --ini-name 05-opcache.ini opcache

RUN docker-php-ext-install soap

#RUN pecl install xdebug-2.6.0
#RUN docker-php-ext-enable xdebug
#RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/php.ini

RUN docker-php-ext-install sockets

RUN sed -i 's_DocumentRoot /var/www/html_DocumentRoot /var/www/html/web_' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite
RUN service apache2 restart

#Install and update composer

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"\
    # && php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;;"\
    && php composer-setup.php\
    && php -r "unlink('composer-setup.php');"\
    && mv composer.phar /usr/bin/composer

RUN composer self-update

#RUN composer self-update 2.2.9

RUN mkdir -p /var/www/html

WORKDIR /var/www/html
