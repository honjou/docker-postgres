# PHP5.6 + Apache
FROM php:5.6-apache

# PHP設定ファイルをコンテナにコピー
ADD php.ini /usr/local/etc/php/

# Composerのインストール
# RUN：コンテナ内でコマンド実行する
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# Node.jsをインストール
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs

# ミドルウェアのインストール
RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim \
libpng-dev \
libpq-dev \
# docker-php-ext-install でPostgreSQL関連のPHPエクステンションをインストール
&& docker-php-ext-install \
mbstring \
pdo \
pdo_pgsql \
pgsql

# Laravelで必要になるmodRewriteを有効化する
RUN mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN /bin/sh -c a2enmod rewrite