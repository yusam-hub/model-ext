#### testing php74

    docker exec -it dev-php74 sh -c "cd /var/www/php74/yusam-hub/helpers && exec bash"

    docker exec -it dev-php74 sh -c "cd /var/www/php74/yusam-hub/helpers && composer update"
    docker exec -it dev-php74 sh -c "cd /var/www/php74/yusam-hub/helpers && composer install"
    docker exec -it dev-php74 sh -c "cd /var/www/php74/yusam-hub/helpers && sh phpunit"
    docker exec -it dev-php74 sh -c "cd /var/www/php74/yusam-hub/helpers && git status"
    docker exec -it dev-php74 sh -c "cd /var/www/php74/yusam-hub/helpers && git pull"

å