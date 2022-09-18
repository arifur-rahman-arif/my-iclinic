#!/bin/sh

DATABASE_NAME=$(echo $CI_COMMIT_REF_SLUG | tr - _)

echo "
echo 'Clonning database'

mysqldump  -uwordpress -pf96abdc15b953d00a410106fea4ba814df1fad0149fd75c5 --no-tablespaces wordpress > /var/lib/mysql/$SERVER_URL.sql

sed -i 's/$SITE_DOMAIN/$SERVER_URL/g' /var/lib/mysql/$SERVER_URL.sql

mysql -u $MYSQL_USER -p$MYSQL_USER_PASS <<SQL_COMMANDS
DROP DATABASE IF EXISTS $DATABASE_NAME;
CREATE DATABASE $DATABASE_NAME;
USE $DATABASE_NAME;
SOURCE /var/lib/mysql/$SERVER_URL.sql;
GRANT ALL PRIVILEGES ON $DATABASE_NAME. * TO '$DATABASE_USER'@'localhost';
FLUSH PRIVILEGES;
SQL_COMMANDS

rm -rf /var/lib/mysql/$SERVER_URL.sql

exit
" > $CI_COMMIT_REF_SLUG-clone-wordpress-db.sh
