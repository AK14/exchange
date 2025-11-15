# Библиотека ak/exchange

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ak/exchange.svg?style=flat-square)](https://packagist.org/packages/ak/exchange)
[![Total Downloads](https://img.shields.io/packagist/dt/ak/exchange.svg?style=flat-square)](https://packagist.org/packages/ak/exchange)

Это PHP-библиотека для получения курса валют Национального Банка Республики Беларусь.

## Требования

- PHP 8.4 или выше
- Расширение PHP `cURL`

### Включение расширения cURL

Для работы библиотеки необходимо, чтобы в вашей конфигурации PHP было включено расширение `cURL`, так как оно используется для выполнения HTTP-запросов к API Национального Банка.

#### Как включить cURL?

1.  **Найдите ваш файл `php.ini`**. Его расположение зависит от вашей операционной системы и веб-сервера. Вы можете найти путь к нему, выполнив `php --ini` в терминале или создав PHP-файл с `<?php phpinfo(); ?>`.

2.  **Раскомментируйте строку**. Откройте `php.ini` и найдите строку, отвечающую за `cURL`. Удалите точку с запятой (`;`) в начале строки, если она там есть.

    *   Для **Windows** это обычно `extension=curl` или `extension=php_curl.dll`:
        ```ini
        ;extension=curl
        ```
        должно стать:
        ```ini
        extension=curl
        ```

    *   Для **Linux/macOS** это `extension=curl`:
        ```ini
        ;extension=curl
        ```
        должно стать:
        ```ini
        extension=curl
        ```

3.  **Перезапустите веб-сервер** (Apache, Nginx) и/или сервис PHP-FPM, чтобы изменения вступили в силу.

4.  **Проверьте установку**. Вы можете убедиться, что расширение активно, выполнив в терминале команду `php -m | grep curl`. Если `curl` появится в списке, значит, все настроено правильно.

## Установка

Вы можете установить пакет через [Composer](https://getcomposer.org/):

```bash
composer require ak/exchange
```

## Использование
