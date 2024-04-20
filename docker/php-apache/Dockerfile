FROM php:8.2-apache

# Linux（Debian系）依存パッケージのインストール
RUN apt update && apt install -y \
  curl \
  zip \
  unzip \
  libicu-dev \
  libzip-dev \
  libpq-dev

# キャッシュクリア
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# PHP拡張機能をインストール
RUN docker-php-ext-install \
  intl \
  opcache \
  pdo \
  pgsql \
  pdo_pgsql

# debian系のapacheで.htaccessのRewriteRuleを有効化する
RUN a2enmod rewrite

WORKDIR /var/www/html

# Composerのインストール
## -s/–silent: プログレスやエラーメッセージなどを表示しない。
## -S/–show-error: サイレントモードのときでもエラーだけは表示する。
## --: 標準入力からスクリプトを受け取る
## –install-dir: composerのインストール先
## –filename composerのファイル名。デフォルトはcomposer.pharなのでcomposerに変えます。
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
