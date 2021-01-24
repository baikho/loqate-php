# loqate-php

A PHP Wrapper for the Loqate API.

## Examples

```php
$loqate = new Loqate('AA1-BB2-CC3');

// Simple example.
$result = $loqate->address()->find('foo');

// Advanced example.
$find = $loqate->requestBuilder(Find::class);
$find
  ->setText('foo')
  ->setIsMiddleWare(TRUE)
  ->setContainer('bar')
  ->setCountries('NL')
  ->makeRequest();
```