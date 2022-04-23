#!/bin/bash

mkdir -p /var/run/mysqld/
touch /var/run/mysqld/mysqld.sock

chmod 777 /var/run/mysqld
chmod 777 /var/run/mysqld/mysqld.sock

if [[ ! -f /var/lib/mysql/test ]]
then
    mysqld --user=mysql --console --skip-name-resolve --skip-networking=0 &
    sleep 15
    mysqladmin -u root password 'password'
    mysqladmin -u root -ppassword create wordpress
    echo "CREATE USER 'wpuser'@'%' IDENTIFIED BY 'pass';" | mysql -u root -ppassword
    mysql -u root -ppassword -Dwordpress < db.sql
    echo "GRANT ALL ON wordpress.* TO 'wpuser'@'%' IDENTIFIED BY 'pass';" | mysql -u root -ppassword
    echo lezgongue
    sleep infinity # PABIEN
else
    mysqld --user=mysql --console --skip-name-resolve --skip-networking=0 $@
fi