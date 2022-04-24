#!/bin/bash

mkdir -p /var/run/mysqld/
touch /var/run/mysqld/mysqld.sock

chmod 777 /var/run/mysqld
chmod 777 /var/run/mysqld/mysqld.sock

if [[ ! -d /var/lib/mysql/wordpress ]]
then
    echo a
    mysqld --user=mysql --console --skip-name-resolve --skip-networking=0 & ProcessSql=$! 
    echo b
    sleep 105
    echo c
    mysqladmin -u root password "$PASSWORDROOT"
    mysqladmin -u root -p"$PASSWORDROOT" create wordpress
    echo "CREATE USER 'wpuser'@'%' IDENTIFIED BY '$PASSWORDDB';" | mysql -u root -p"$PASSWORDROOT"
    mysql -u root -p"$PASSWORDROOT" -Dwordpress < db.sql
    echo "GRANT ALL ON wordpress.* TO 'wpuser'@'%' IDENTIFIED BY '$PASSWORDDB';" | mysql -u root -p"$PASSWORDROOT"
    echo "todo bueno lezGONGUE"
    wait -n $ProcessSql
    
else
    echo d
    sleep 45
    echo "Volume déjà loaded lezGONGUE"
    mysqld --user=mysql
fi