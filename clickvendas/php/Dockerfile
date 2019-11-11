FROM php:7.0-fpm
RUN docker-php-ext-install mysqli pdo_mysql
COPY .shared/scripts/ /tmp/scripts/
RUN chmod +x -R /tmp/scripts/

# install extensions
RUN /tmp/scripts/install_php_extensions.sh

