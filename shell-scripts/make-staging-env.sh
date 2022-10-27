#!/bin/sh

echo "
echo '
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    ServerName $SERVER_URL
    ServerAlias www.$SERVER_URL
    DocumentRoot /var/www/$SERVER_URL
    <Directory /var/www/$SERVER_URL>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
    <IfModule mod_dir.c>
        DirectoryIndex index.php index.pl index.cgi index.html index.xhtml index.htm
    </IfModule>
</VirtualHost>
' > /etc/apache2/sites-available/$SERVER_URL.conf

a2ensite $SERVER_URL.conf

echo '
#!/usr/bin/expect
spawn sudo systemctl reload apache2
expect -re \"password for $SERVER_USER: \"
send \"$SERVER_USER_PASSWORD\r\"
send \"$SERVER_USER_PASSWORD\r\"
send \"$SERVER_USER_PASSWORD\r\"

interact
' > /etc/apache2/sites-available/$SERVER_URL.exp

expect /etc/apache2/sites-available/$SERVER_URL.exp && exit
" >$CI_COMMIT_REF_SLUG-make-staging-env.sh
