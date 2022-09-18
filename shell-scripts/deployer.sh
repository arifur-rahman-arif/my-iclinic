#!/bin/sh

THEME_NAME=$(echo $CI_PROJECT_TITLE | tr [:upper:] [:lower:])

echo "
cd /var/www/$SERVER_URL/wp-content/themes

find . -name '$THEME_NAME' -type d -exec rm -rf {} \;

unzip -o $ZIP_NAME.zip -d /var/www/$SERVER_URL/wp-content/themes/$THEME_NAME/

exit
" > deployer.sh
