<?php

declare(strict_types=1);

namespace Baikho\Loqate\Geocoding;

use Baikho\Loqate\BaseClient;

/**
 * Class UK Find v2.
 *
 * @package Baikho\Loqate\Geocoding
 * @see https://www.loqate.com/resources/support/apis/Geocoding/UK/Find/2/
 */
class UKFind extends BaseClient
{

    /**
     * The location to geocode. This can be a full or partial postcode, a place name or street comma town.
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
        return 'Geocoding/UK/Find/v2/';
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
     * @return UKFind
     */
    public function setLocation(string $location): UKFind
    {
        $this->location = $location;
        return $this;
    }
}