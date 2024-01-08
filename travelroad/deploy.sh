#!/bin/bash

cd /usr/share/nginx/travelroad_laravel
sudo git add .
sudo git commit -m "Changes"
sudo git push

ssh alejandrohernandez@alejandrohernandez.arkania.es "
	cd /home/alejandrohernandez/travelroad_laravel
	git pull
	cd travelroad
	composer install
	"
