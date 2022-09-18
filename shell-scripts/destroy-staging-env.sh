#!/bin/sh

echo "
rm -rf /var/www/$SERVER_URL

a2dissite $SERVER_URL.conf

echo '
#!/usr/bin/expect
spawn service apache2 reload
expect -re \"Password: \"
send \"bottrish@bari\r\"
send \"bottrish@bari\r\"
send \"bottrish@bari\r\"

interact
' > /etc/apache2/sites-available/$SERVER_URL.exp

expect /etc/apache2/sites-available/$SERVER_URL.exp && exit
" > $CI_COMMIT_REF_SLUG-destroy-staging-env.sh
