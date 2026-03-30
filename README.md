# Loqate PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/baikho/loqate-php.svg)](https://packagist.org/packages/baikho/loqate-php)
[![Total Downloads](https://img.shields.io/packagist/dt/baikho/loqate-php.svg)](https://packagist.org/packages/baikho/loqate-php)
[![MIT Licensed](https://img.shields.io/github/license/baikho/loqate-php.svg)](https://github.com/baikho/loqate-php/blob/main/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/baikho/loqate-php.svg)](https://github.com/baikho/loqate-php/issues)
[![GitHub stars](https://img.shields.io/github/stars/baikho/loqate-php.svg)](https://github.com/baikho/loqate-php/stargazers)

PHP Wrapper for the [Loqate API](https://docs.loqate.com/api-reference/introduction/).

---

## Table of contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Quick start](#quick-start)
- [Address verification](#address-verification)
- [Geocoding](#geocoding)
- [Email verification](#email-verification)
- [Bank account verification](#bank-account-verification)
- [Phone verification](#phone-verification)
- [License](#license)

---

## Requirements

- PHP **8.1+**
- Guzzle **6.5+** or **7.2+**


## Installation

```bash
composer require baikho/loqate-php
```

## Quick start

Create a client with your Loqate API key, then call the helpers for each product area:

```php
use Baikho\Loqate\Loqate;

$client = new Loqate('your-api-key');

$result = $client->address()->find('SW1A 1AA');
```

All examples below assume `$client` is already constructed as shown.

## Address verification

[Capture Find `v1.10`](https://docs.loqate.com/api-reference/address-capture/find) and [Capture Retrieve `v1.00`](https://docs.loqate.com/api-reference/address-capture/retrieve) wrap address capture and retrieval.

**Find (search):**

```php
$result = $client->address()->find('foo');
```

**Find with full control** (extra query parameters):

```php
use Baikho\Loqate\Address\Find;

$result = new Find('your-api-key')
    ->setText('foo')
    ->setIsMiddleWare(TRUE)
    ->setContainer('bar')
    ->setCountries('NL')
    ->makeRequest();
```

**Retrieve** by Loqate id:

```php
$result = $client->address()->retrieve('GB|RM|B|12345678');
```
**Retrieve with full control**:

```php
use Baikho\Loqate\Address\Retrieve;

$result = new Retrieve('your-api-key')
    ->setId('GB|RM|B|12345678')
    ->makeRequest();
```

## Geocoding

Supported endpoints:

| API | Version | Loqate docs                                                                                                                |
| --- | --- |----------------------------------------------------------------------------------------------------------------------------|
| Distance | `v1.00` | [Distances and directions - Distance](https://docs.loqate.com/api-reference/geocode/distances-and-directions/distance)     |
| Directions | `v2.00` | [Distances and directions - Directions](https://docs.loqate.com/api-reference/geocode/distances-and-directions/directions) |
| International Geocode | `v1.10` | [Geocoding - International Geocode](https://docs.loqate.com/api-reference/geocode/geocoding/international-geocode)         |
| UK Find | `v2.00` | [Geocoding - UK Find](https://docs.loqate.com/api-reference/geocode/geocoding/uk-find)                                     |
| UK Geocode | `v2.10` | [Geocoding - UK Geocode](https://docs.loqate.com/api-reference/geocode/geocoding/uk-geocode)                          |
| UK Retrieve | `v2.00` | [Geocoding - UK Retrieve](https://docs.loqate.com/api-reference/geocode/geocoding/uk-retrieve)                          |
| UK Reverse Geocode | `v1.10` | [Geocoding - UK Reverse Geocode](https://docs.loqate.com/api-reference/geocode/geocoding/uk-reversegeocode)           |

**Distance** between two points - easting/northing, latitude/longitude, or postcodes (UK):

```php
$result = $client->geocoding()->distance('381600,259400', '380600,25840');
$result = $client->geocoding()->distance('51.4733514399,-0.00088499646', '51.492914695,-0.1215161806');
$result = $client->geocoding()->distance('SE10 8XJ', 'SW1A 0AA');
```

**Directions** - same coordinate formats as distance:

```php
$result = $client->geocoding()->directions('381600,259400', '380600,25840');
$result = $client->geocoding()->directions('51.4733514399,-0.00088499646', '51.492914695,-0.1215161806');
$result = $client->geocoding()->directions('SE10 8XJ', 'SW1A 0AA');
```

**International geocode** - country as ISO-2 or ISO-3; location can be postal code, place name, or Loqate id:

```php
$result = $client->geocoding()->geocode('GB', 'London');
```

**UK find / geocode / retrieve** - full or partial postcode, place name, or `street, town` style text:

```php
$result = $client->geocoding()->ukFind('London');
$result = $client->geocoding()->ukGeocode('London');
$result = $client->geocoding()->ukRetrieve('GB|RM|B|12345678');
```

**UK reverse geocode** - centre point as postcode or coordinates (latitude/longitude or easting/northing):

```php
$result = $client->geocoding()->ukReverseGeocode('51.4733514399,-0.00088499646');
```

## Email verification

```php
$result = $client->email()->validate('foo@example.com');
```

## Bank account verification

```php
$result = $client->bankAccount()->validate('12345678', '20-45-67');
```

## Phone verification

```php
$result = $client->phone()->validate('1234567890');
$result = $client->phone()->validate('1234567890', 'NL');
```

---

## License

This package is released under the [MIT License](LICENSE.md).
