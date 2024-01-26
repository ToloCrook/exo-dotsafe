FROM php:8.2-fpm-alpine3.18 AS base

RUN apk add --no-cache bash
RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.alpine.sh' | bash
RUN apk add symfony-cli

WORKDIR /var/www
RUN mkdir -p /var/www/var/
CMD ["symfony", "server:start"]
EXPOSE 8000


