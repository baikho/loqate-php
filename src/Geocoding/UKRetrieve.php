<?php

declare(strict_types=1);

namespace Baikho\Loqate\Geocoding;

use Baikho\Loqate\BaseClient;

/**
 * Class UK Retrieve v2.
 *
 * @package Baikho\Loqate\Geocoding
 * @see https://www.loqate.com/resources/support/apis/Geocoding/UK/Retrieve/2/
 */
class UKRetrieve extends BaseClient
{

    /**
     * The location ID to retrieve the coordinates for.
     *
     * @var string|null
     */
    protected ?string $id;

    /**
     * Find constructor.
     *
     * @param string $key
     * @param string|null $id
     */
    public function __construct(string $key, string $id = null)
    {
        parent::__construct($key);
        $this->id = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function getUri(): string
    {
        return 'Geocoding/UK/Retrieve/v2/';
    }

    /**
     * {@inheritdoc}
     */
    public function setParams(array $parameters): self
    {
        $this->id = $parameters['id'] ?? null;
        return $this;
    }

    /**
     * Sets the location ID.
     *
     * @param string $id
     * @return UKRetrieve
     */
    public function setId(string $id): UKRetrieve
    {
        $this->id = $id;
        return $this;
    }
}