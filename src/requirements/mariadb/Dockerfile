FROM debian:buster

EXPOSE 3306

RUN apt-get update -y
RUN apt-get install -y mariadb-server

COPY ./conf/db.sql ./db.sql 
COPY ./conf/script.sh ./script.sh 
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

CMD bash ./script.sh