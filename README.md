# API QIWI для DevelNext
## Примеры
```php
  $qiwi = new QiwiApi('TOKEN_HERE');
  // Перевод на QIWI
  $res = $qiwi->pay()->providerId(99)->account('+71234567890')->amount(1)->id(Time::millis())->query();
  // Последние 5 платежей
  $res = $qiwi->paymentHistory()->rows(5)->operation('OUT')->query();
```
## Скачать
[Последняя версия](https://github.com/broelik/dn-qiwi-bundle/releases/latest)
