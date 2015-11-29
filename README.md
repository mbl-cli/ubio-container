uBio Container
==============

This repo creates container to host http://ubio.org site
The code for the site needs to be in a volume

Usage
-----

```
chown 1002:1002 -R path/to/www

docker pull mblab/ubio

docker run -d --name ubio -v path/to/www:/var/www --env-file=/ubio/config/production.env mblab/ubio
```
