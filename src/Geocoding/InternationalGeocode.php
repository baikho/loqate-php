<?php

declare(strict_types=1);

namespace Baikho\Loqate\Geocoding;

use Baikho\Loqate\BaseClient;

/**
 * Class Geocode v1.1.
 *
 * @package Baikho\Loqate\Geocoding
 * @see https://www.loqate.com/resources/support/apis/Geocoding/International/Geocode/1.1/
 */
class InternationalGeocode extends BaseClient
{

    /**
     * The name or ISO 2 or 3 character code for the country to search in
     * Most country names will be recognised but the use of the ISO country code
     * is recommended for clarity.
     *
     * @var string|null
     */
    protected ?string $country;

    /**
     * The location to geocode. This can be a postal code or place name.
     *
     * @var string|null
     */
    protected ?string $location;

    /**
     * Find constructor.
     *
     * @param string $key
     * @param string|null $location
     */
    public function __construct(string $key, string $country = null, string $location = null)
    {
        parent::__construct($key);
        $this->country = $country;
        $this->location = $location;
    }

    /**
     * {@inheritdoc}
     */
    public function getUri(): string
    {
        return 'Geocoding/International/Geocode/v1.1/';
    }

    /**
     * {@inheritdoc}
     */
    public function setParams(array $parameters): self
    {
        $this->country = $parameters['country'] ?? null;
        $this->location = $parameters['location'] ?? null;
        return $this;
    }

    /**
     * Sets the country.
     *
     * @param string $country
     * @return InternationalGeocode
     */
    public function setCountry(string $country): InternationalGeocode
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Sets the location.
     *
     * @param string $location
     * @return InternationalGeocode
     */
    public function setLocation(string $location): InternationalGeocode
    {
        $this->location = $location;
        return $this;
    }
}