FROM php:8.3-fpm
LABEL authors="dpjb"

RUN apt update; \
    apt install -y autoconf pkg-config libssl-dev libzip-dev git gcc make autoconf libc-dev vim unzip

RUN docker-php-ext-install bcmath pdo pdo_mysql mysqli sockets zip

RUN pecl install pcov \
    && docker-php-ext-enable pcov

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin \
    && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer

WORKDIR /home/guess

ENTRYPOINT ["php", "-S", "0.0.0.0:8080", "-t", "/home/guess/public"]