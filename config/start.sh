#!/bin/bash

rsync -av --delete /mnt/www /data
cp -f /variables.php /data/www
rm -rf /var/www
ln -s /data/www /var
chown -R www-data /var/www

chmod a+r /etc/resolv.conf
chmod a+r /etc/hosts
# New bug, after we added quartley RHEL patches, Apr 2015:
chmod a+rx /
/usr/bin/supervisord
