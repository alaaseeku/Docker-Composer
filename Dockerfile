FROM php:7-fpm
RUN docker-php-ext-install mysqli
WORKDIR /
COPY code /code
EXPOSE 9000
CMD ["php-fpm"]
