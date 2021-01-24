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
$result = $loqate->address()->retrieve('XX|XX|XXX|XXXXXXXXXX');

// Advanced example.
$result = (new \Baikho\Loqate\Address\Retrieve('API Key'))
  ->setId('XX|XX|XXX|XXXXXXXXXX')
  ->makeRequest();
```

### Bank Account Verification API

#### Validate Bank Account:

```php
$result = $loqate->bankAccount()->validate('XXXXXXXX', 'XX-XX-XX');
```

### Phone Verification API

#### Validate Phone Number:

```php
$result = $loqate->phone()->validate('1234567890');
$result = $loqate->phone()->validate('1234567890', 'NL');
```