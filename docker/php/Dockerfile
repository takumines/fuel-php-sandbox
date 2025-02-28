FROM php:8.3-fpm-bullseye as builder

SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

ARG APP_ENV=local

ENV TZ=UTC \
  LANG=en_US.UTF-8 \
  LANGUAGE=en_US:en \
  LC_ALL=en_US.UTF-8 \
  COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
  apt-get -y install git \
    libicu-dev \
    libonig-dev \
    libzip-dev \
    unzip \
    locales \
    netcat  \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*  \
  && locale-gen en_US.UTF-8 \
  && localedef -f UTF-8 -i en_US en_US.UTF-8 \
  && mkdir /var/run/php-fpm  \
  && docker-php-ext-install \
    intl \
    pdo_mysql \
    zip \
    bcmath \
  && composer config -g process-timeout 3600  \
  && composer config -g repos.packagist composer https://packagist.org

FROM builder as local

WORKDIR /var/www

# PHPの設定ファイルコピー
COPY ./docker/php/php.local.ini /usr/local/etc/php/php.ini

# ローカル環境でのみxdebugをインストール
RUN pecl install xdebug; docker-php-ext-enable xdebug

CMD ["/bin/bash", "-c", "php-fpm"]
