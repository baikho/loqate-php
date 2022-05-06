<?php

declare(strict_types=1);

namespace Baikho\Loqate\Geocoding;

use Baikho\Loqate\BaseClient;

/**
 * Class UK Reverse Geocode v1.1.
 *
 * @package Baikho\Loqate\Geocoding
 * @see https://www.loqate.com/resources/support/apis/Geocoding/UK/ReverseGeocode/1.1/
 */
class UKReverseGeocode extends BaseClient
{

    /**
     * A postcode or coordinates (latitude, longitude or easting, nothing) of the centre of the search.
     *
     * @var string|null
     */
    protected ?string $centrePoint;

    /**
     * Find constructor.
     *
     * @param string $key
     * @param string|null $centrePoint
     */
    public function __construct(string $key, string $centrePoint = null)
    {
        parent::__construct($key);
        $this->centrePoint = $centrePoint;
    }

    /**
     * {@inheritdoc}
     */
    public function getUri(): string
    {
        return 'Geocoding/UK/ReverseGeocode/v1.1/';
    }

    /**
     * {@inheritdoc}
     */
    public function setParams(array $parameters): self
    {
        $this->centrePoint = $parameters['centrePoint'] ?? null;
        return $this;
    }

    /**
     * Sets the location.
     *
     * @param string $centrePoint
     * @return UKReverseGeocode
     */
    public function setCentrePoint(string $centrePoint): UKReverseGeocode
    {
        $this->centrePoint = $centrePoint;
        return $this;
    }
}