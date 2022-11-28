#!/bin/sh

DATABASE_NAME=$(echo $CI_COMMIT_REF_SLUG | tr - _)

echo "
echo Clonning wordpress

rsync -ar /var/www/html/* /var/www/$SERVER_URL/

sed -i \"s/define( 'DB_NAME', 'wordpress' )/define( 'DB_NAME', '$DATABASE_NAME' )/g\" /var/www/$SERVER_URL/wp-config.php

sed -i \"s/define( 'WP_DEBUG', false );/define( 'WP_DEBUG', true );\ndefine( 'WP_DEBUG_LOG', true );/g\" /var/www/$SERVER_URL/wp-config.php

exit
" > $CI_COMMIT_REF_SLUG-clone-wordpress.sh
