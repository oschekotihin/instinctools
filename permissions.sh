#!/bin/bash

HOMEDIR=/home/wordpress/instinctools.eu

if [ -d $HOMEDIR ]; then
    chown -R wordpress:www-data $HOMEDIR
    find $HOMEDIR -type d -exec chmod 755 {} \;
    find $HOMEDIR -type f -exec chmod 644 {} \;
    find $HOMEDIR/wp-content/uploads -type d -exec chmod 775 {} \;
    chmod +x $HOMEDIR/permissions.sh
    chmod +x $HOMEDIR/update.sh
else
    echo "Directory $HOMEDIR not found"
fi
