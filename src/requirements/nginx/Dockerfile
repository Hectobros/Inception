FROM debian:buster

RUN apt-get update -y
RUN apt-get install -y nginx openssl

RUN mkdir /etc/nginx/ssl
RUN mkdir -p /var/www/html/wordpress

COPY conf/nginx.conf /etc/nginx/conf.d/default.conf
COPY conf/index.html /var/www/html/wordpress

RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/nschmitt.42.fr.pem -keyout /etc/nginx/ssl/nschmitt.42.fr.key -subj "/C=FR/ST=Mayenne/L=Laval/O=42/OU=studs/CN=nschmitt.42.fr"

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]