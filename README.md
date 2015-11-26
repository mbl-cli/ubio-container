uBio Container
==============

This repo creates container to host http://ubio.org site
The code for the site needs to be in a volume

Usage
-----

Edit {{UBIO_ROOT}}/varibales.php in  ubio to correspond to the site and place
the code somewhere.

```
chown 1002:1002 -R path/to/code

docker pull mblab/ubio

docker run -d --name ubio -v path/to/code:/var/www mblab/ubio
```
