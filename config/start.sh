#!/bin/bash

rsync -av --delete /mnt/www /data
rm -rf /var/www
chown -R www-data:www-data /data
ln -s /data/www /var

chmod a+r /etc/resolv.conf
chmod a+r /etc/hosts
# New bug, after we added quartley RHEL patches, Apr 2015:
chmod a+rx /
/usr/bin/supervisord
