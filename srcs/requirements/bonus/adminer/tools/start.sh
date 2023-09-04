#!/bin/bash

mkdir -p /var/www/html/;
mkdir -p /run/php;
wget "https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php" \
-O /var/www/html/adminer.php;

/usr/sbin/php-fpm7.3 -F;