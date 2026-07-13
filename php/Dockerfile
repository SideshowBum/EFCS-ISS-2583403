FROM php:fpm-alpine

# update server
RUN apk update; \
    apk upgrade;

# install mysqli extension to use database in php
RUN docker-php-ext-install mysqli

