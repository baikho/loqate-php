# loqate-php

A PHP Wrapper for the [Loqate API](https://www.loqate.com/resources/support/apis/).

## Examples

```php
$loqate = new \Baikho\Loqate\Loqate('AA1-BB2-CC3');

// Simple example.
$result = $loqate->address()->find('foo');

// Advanced example.
$find = $loqate->requestBuilder(Find::class);
$result = $find
  ->setText('foo')
  ->setIsMiddleWare(TRUE)
  ->setContainer('bar')
  ->setCountries('NL')
  ->makeRequest();
```
