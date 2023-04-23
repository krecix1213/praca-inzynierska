FROM debian:bullseye
USER root
WORKDIR /var/www/markus
RUN apt update && apt upgrade --yes && apt install --yes \
    apache2	\
    apache2-utils \
    ca-certificates \
    openssl \
    php7.4 \
	php7.4-apcu\
	php7.4-memcached\
    php7.4-ctype\
	php7.4-redis\
    php7.4-iconv\
    php7.4-json\
    php7.4-simplexml\
    php7.4-tokenizer\
    php7.4-pgsql\
    ssmtp \
    composer\
    vim\
    nano
RUN ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load
RUN rm -f /etc/apache2/sites-available/000-default.conf
EXPOSE 80
CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]
