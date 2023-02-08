FROM php:8.1-apache

# composer install
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update
# composer install時にErrorが出たため
RUN apt-get install -y git
RUN mkdir /opt/php