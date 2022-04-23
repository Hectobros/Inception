FROM debian:buster

RUN apt-get update -y
RUN apt-get install -y curl php php7.3 php7.3-fpm php7.3-mysql php-common php7.3-cli php7.3-common php7.3-json php7.3-opcache php7.3-readline php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip

RUN curl -k https://wordpress.org/latest.tar.gz --output /tmp/wp.tar.gz
RUN mkdir -p /var/www/html/wordpress
RUN tar xzf /tmp/wp.tar.gz --strip-components=1 -C /var/www/html/wordpress

RUN chmod -R 755 /var/www/

RUN service php7.3-fpm start
RUN service php7.3-fpm stop

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf

EXPOSE 9000

CMD php-fpm7.3 -F -R
#CMD sleep infinity
