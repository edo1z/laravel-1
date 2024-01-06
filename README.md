# laravel-1

## phpのインストール

```shell
> sudo pacman -Syu php php-pgsql
> php -v
PHP 8.2.14 (cli) (built: Dec 21 2023 14:02:51) (NTS)
```
## php.iniでpgsql関連を有効にする
下記でphp.iniの場所を確認する

```shell
> php --ini
Configuration File (php.ini) Path: /etc/php
Loaded Configuration File:         /etc/php/php.ini
Scan for additional .ini files in: /etc/php/conf.d
Additional .ini files parsed:      (none)
```

php.iniで、`extension=pdo_pgsql`と`extension=pgsql`を有効にする。

## Laravelインストール

```shell
> composer create-project laravel/laravel laravel1
> cd laravel1
> php artisan serve
```

## DB設定
`.env`と`config/database.php`を編集する

## マイグレーション

```shell
> php artisan migrate
```

