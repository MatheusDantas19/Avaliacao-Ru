FROM wyveo/nginx-php-fpm:latest
WORKDIR /usr/share/nginx
RUN rm -rf /usr/share/nginx/html
RUN ln -s public html
COPY . /usr/share/nginx
RUN chmod 777 /usr/share/nginx/storage/
# RUN php artisan config:cache
# RUN php artisan migrate
# RUN php artisan db:seed
