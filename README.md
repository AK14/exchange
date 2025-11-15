# Библиотека ak/exchange

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ak14/exchange.svg?style=flat-square)](https://packagist.org/packages/ak14/exchange)
[![Total Downloads](https://img.shields.io/packagist/dt/ak14/exchange.svg?style=flat-square)](https://packagist.org/packages/ak14/exchange)

Это PHP-библиотека для получения курса валют Национального Банка Республики Беларусь.

## Требования

- PHP 8.4 или выше
- Расширение PHP `cURL`

### Включение расширения cURL

Для работы библиотеки необходимо, чтобы в вашей конфигурации PHP было включено расширение `cURL`, так как оно используется для выполнения HTTP-запросов к API.

## Установка

Вы можете установить пакет через [Composer](https://getcomposer.org/):

```bash
composer require ak14/exchange
```

## Использование

use Ak14\Exchange\Exchange;

## Получение списка валют
```bash
$currencies = new Exchange()->currencies();
```