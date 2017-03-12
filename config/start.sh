#!/bin/bash

if [ ! -d "/data/www" ]; then
  cp -r /mnt/www /data
  ln -s /data/www /var/www
  chown -R www-data /var/www
fi

chmod a+r /etc/resolv.conf
chmod a+r /etc/hosts
# New bug, after we added quartley RHEL patches, Apr 2015:
chmod a+rx /
/usr/bin/supervisord
