#!/bin/bash

rsync -av --delete /mnt/www /var
chown -R www-data:www-data /var/www
ln -s /var/www /data
echo "0.0.0.0 ubio.org www.ubio.org" >> /etc/hosts

chmod a+r /etc/resolv.conf
chmod a+r /etc/hosts
# New bug, after we added quartley RHEL patches, Apr 2015:
chmod a+rx /
/usr/bin/supervisord
