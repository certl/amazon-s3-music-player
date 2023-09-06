FROM php:5.6

COPY ./amazon-s3-music-player/* /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./index.php" ]