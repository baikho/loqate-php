<?php

declare(strict_types=1);

namespace Baikho\Loqate\Geocoding;

use Baikho\Loqate\BaseClient;

/**
 * Class UK Geocode v2.1.
 *
 * @package Baikho\Loqate\Geocoding
 * @see https://www.loqate.com/resources/support/apis/Geocoding/UK/Geocode/2.1/
 */
class UKGeocode extends BaseClient
{

    /**
     * The location to geocode. This can be a full or partial postcode, a place name, street comma town, address (comma separated lines) or an ID from PostcodeAnywhere/Find web services.
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
    public function __construct(string $key, string $location = null)
    {
        parent::__construct($key);
        $this->location = $location;
    }

    /**
     * {@inheritdoc}
     */
    public function getUri(): string
    {
        return 'Geocoding/UK/Geocode/v2.1/';
    }

    /**
     * {@inheritdoc}
     */
    public function setParams(array $parameters): self
    {
        $this->location = $parameters['location'] ?? null;
        return $this;
    }

    /**
     * Sets the location.
     *
     * @param string $location
     * @return UKGeocode
     */
    public function setLocation(string $location): UKGeocode
    {
        $this->location = $location;
        return $this;
    }
}