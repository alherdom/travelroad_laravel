#!/bin/bash

ssh alejandrohernandez@alejandrohernandez.arkania.es "
	cd /home/alejandrohernandez/travelroad_laravel
	git pull
	cd travelroad
	composer install
	"
