FROM nginx:1.24-alpine as builder

SHELL ["/bin/ash", "-oeux", "pipefail", "-c"]

ENV TZ=UTC

COPY ./src/public/ /var/www/public

FROM builder as local

COPY ./docker/web/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/web/default.local.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www
