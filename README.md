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

The only APIs currently supported are

- [Distance](https://www.loqate.com/resources/support/apis/DistancesAndDirections/Interactive/Distance/1/)
- [Directions](https://www.loqate.com/resources/support/apis/DistancesAndDirections/Interactive/Directions/2/)
- [International Geocode](https://www.loqate.com/resources/support/apis/Geocoding/International/Geocode/1.1/)
- [UK Find](https://www.loqate.com/resources/support/apis/Geocoding/UK/Find/2/)
- [UK Geocode](https://www.loqate.com/resources/support/apis/Geocoding/UK/Geocode/2.1/)
- [UK Retrieve](https://www.loqate.com/resources/support/apis/Geocoding/UK/Retrieve/2/)

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

#### Geocode an International Place or Location

Country must be supplied as an ISO2 or ISO3 country code.
Location can be a postal code or place name, Loqate ID also works.

```php
$result = $loqate->geocoding()->geocode('GB', 'London');
```

#### Find a UK Place or Location

This can be a full or partial postcode, a place name or street comma town.

```php
$result = $loqate->geocoding()->ukFind('London');
```

#### Geocode a UK Place or Location

This can be a full or partial postcode, a place name or street comma town.

```php
$result = $loqate->geocoding()->ukGeocode('London');
```

#### Retrieve a UK Place or Location

This can be a full or partial postcode, a place name or street comma town.

```php
$result = $loqate->geocoding()->ukRetrieve('XX|XX|XXX|XXXXXXXXXX');
```
#### Reverse Geocode a position to Address or Location

Returns the nearest address or location to the given coordinates. A postcode or coordinates (latitude, longitude or easting, nothing) of the centre of the search.

```php
$result = $loqate->geocoding()->ukReverseGeocode('51.4733514399,-0.00088499646');
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