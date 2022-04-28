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

### Geocoding API

Currently only [Distance](https://www.loqate.com/resources/support/apis/DistancesAndDirections/Interactive/Distance/1/) and [Directions](https://www.loqate.com/resources/support/apis/DistancesAndDirections/Interactive/Directions/2/) APIs are supported.

#### Calculate distance between two points.

Easting/Northing, Latitude/Longitude & Postcodes are supported.

```php
$result = $loqate->geocoding()->distance('381600,259400', '380600,25840');
$result = $loqate->geocoding()->distance('51.4733514399,-0.00088499646', '51.492914695,-0.1215161806');
$result = $loqate->geocoding()->distance('SE10 8XJ', 'SW1A 0AA');
```

#### Get directions between two points.

Easting/Northing, Latitude/Longitude & Postcodes are supported.

```php
$result = $loqate->geocoding()->directions('381600,259400', '380600,25840');
$result = $loqate->geocoding()->directions('51.4733514399,-0.00088499646', '51.492914695,-0.1215161806');
$result = $loqate->geocoding()->directions('SE10 8XJ', 'SW1A 0AA');
```

### Email Verification API

#### Validate Email Address:

```php
$result = $loqate->email()->validate('foo@example.com');
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