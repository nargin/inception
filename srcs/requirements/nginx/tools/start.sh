#!/bin/bash

if [ ! -f /etc/ssl/certs/nginx.crt ]; then
openssl req -newkey rsa:4096 -x509 -nodes -days 365  \
		-out /etc/ssl/certs/nginx.crt \
		-keyout /etc/ssl/private/nginx.key \
		-subj "/C=MA/ST=Perpignan/L=Perpignan/O=42 Perpignan/OU=Nothing/CN=romaurel.42.fr";
fi

nginx -g 'daemon off;';