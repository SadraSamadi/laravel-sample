FROM php:fpm
WORKDIR /blog
RUN docker-php-ext-install pdo_mysql
CMD ["php-fpm"]
EXPOSE 9000
