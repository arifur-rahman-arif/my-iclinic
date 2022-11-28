#!/bin/sh

echo "
rm -rf /var/www/$SERVER_URL

a2dissite $SERVER_URL.conf > /dev/null

systemctl reload apache2 && exit
" >destroy-staging-env.sh

# echo '
# #!/usr/bin/expect
# spawn sudo systemctl reload apache2
# expect -re \"password for $SERVER_USER: \"
# send \"$SERVER_USER_PASSWORD\r\"
# send \"$SERVER_USER_PASSWORD\r\"
# send \"$SERVER_USER_PASSWORD\r\"

# interact
# ' > /etc/apache2/sites-available/$SERVER_URL.exp

# expect /etc/apache2/sites-available/$SERVER_URL.exp && exit
