# loqate-php

A PHP Wrapper for the [Loqate API](https://www.loqate.com/resources/support/apis/).

## Installation

```
composer require baikho/loqate-php
```

## Usage

```php
$loqate = new \Baikho\Loqate\Loqate('API Key');
```

### Address Verification API

#### Find Address:

```php
// Simple example.
$result = $loqate->address()->find('foo');

// Advanced example.
$result = (new \Baikho\Loqate\Address\Find('API Key'))
  ->setText('foo')
  ->setIsMiddleWare(TRUE)
  ->setContainer('bar')
  ->setCountries('NL')
  ->makeRequest();
```

#### Retrieve Address:

```php
// Simple example.
$result = $loqate->address()->retrieve('foo');

// Advanced example.
$result = (new \Baikho\Loqate\Address\Retrieve('API Key'))
  ->setId('foo')
  ->makeRequest();
```
