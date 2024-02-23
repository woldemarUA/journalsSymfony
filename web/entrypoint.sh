#!/bin/bash

# Set permissions
chown -R www-data:www-data /var/www/html/var /var/www/html/vendor /var/www/html/public
chmod -R g+rw /var/www/html/var /var/www/html/vendor /var/www/html/public

# Execute the command provided as arguments to this script
exec "$@"