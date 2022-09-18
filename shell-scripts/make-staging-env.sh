#!/bin/sh

echo "
echo '
# Added to mitigate CVE-2017-8295 vulnerability
UseCanonicalName On

<VirtualHost *:80>
    ServerAdmin webmaster@localhost
        
	ServerName $SERVER_URL

	ServerAlias www.$SERVER_URL
	
	DocumentRoot /var/www/$SERVER_URL

	<Directory /var/www/$SERVER_URL/>
		Options FollowSymLinks

		AllowOverride All

		Require all granted
	</Directory>
</VirtualHost>

<VirtualHost *:80>
 	ServerName null

	ServerAlias *

	Redirect 404 /

	ErrorDocument 404 \"$SITE_DOMAIN/404\"
</VirtualHost>
' > /etc/apache2/sites-available/$SERVER_URL.conf

a2ensite $SERVER_URL.conf

echo '
#!/usr/bin/expect
spawn sudo systemctl reload apache2
expect -re \"password for deployer: \"
send \"bottrish@bari\r\"
send \"bottrish@bari\r\"
send \"bottrish@bari\r\"

interact
' > /etc/apache2/sites-available/$SERVER_URL.exp

expect /etc/apache2/sites-available/$SERVER_URL.exp && exit
" > $CI_COMMIT_REF_SLUG-make-staging-env.sh
