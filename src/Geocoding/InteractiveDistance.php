<?php

declare(strict_types=1);

namespace Baikho\Loqate\Geocoding;

use Baikho\Loqate\BaseClient;

/**
 * Class InteractiveDistance v1.
 *
 * @package Baikho\Loqate\Geocoding
 * @see https://www.loqate.com/resources/support/apis/DistancesAndDirections/Interactive/Distance/1/
 */
class InteractiveDistance extends BaseClient
{

    /**
     * The coordinates (latitude, longitude or easting, northing) of the start of the route. A postcode is also valid.
     *
     * @var string|null
     */
    protected ?string $start;

    /**
     * The coordinates (latitude, longitude or easting, northing) of the finish of the route. A postcode is also valid.
     *
     * @var string|null
     */
    protected ?string $finish;

    /**
     * The coordinates (latitude, longitude or easting, northing) of any waypoints. Postcodes are also valid.
     *
     * @var string|null
     */
    protected ?string $wayPoints;

    /**
     * Specifies how the distances between the stores are calculated. Allowed values are:
     *
     *      Fastest
     *      Shortest
     *
     * @var string|null
     */
    protected ?string $distanceType;

    /**
     * Find constructor.
     *
     * @param string $key
     * @param string|null $start
     * @param string|null $finish
     * @param string|null $wayPoints
     * @param string|null $distanceType
     */
    public function __construct(string $key, string $start = null, string $finish = null, string $wayPoints = null, string $distanceType = null)
    {
        parent::__construct($key);
        $this->start = $start;
        $this->finish = $finish;
        $this->wayPoints = $wayPoints;
        $this->distanceType = $distanceType;
    }

    /**
     * {@inheritdoc}
     */
    public function getUri(): string
    {
        return 'DistancesAndDirections/Interactive/Distance/v1/';
    }

    /**
     * {@inheritdoc}
     */
    public function setParams(array $parameters): self
    {
        $this->start = $parameters['start'] ?? null;
        $this->finish = $parameters['finish'] ?? null;
        $this->wayPoints = $parameters['wayPoints'] ?? null;
        $this->distanceType = $parameters['distanceType'] ?? null;
        return $this;
    }

    /**
     * Sets the start.
     *
     * @param string $start
     * @return InteractiveDistance
     */
    public function setStart(string $start): InteractiveDistance
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Sets the finish.
     *
     * @param string $finish
     * @return InteractiveDistance
     */
    public function setFinish(string $finish): InteractiveDistance
    {
        $this->finish = $finish;
        return $this;
    }

    /**
     * Sets the wayPoints.
     *
     * @param string $wayPoints
     * @return InteractiveDistance
     */
    public function setWayPoints(string $wayPoints): InteractiveDistance
    {
        $this->wayPoints = $wayPoints;
        return $this;
    }

    /**
     * Sets the distanceType.
     *
     * @param string $distanceType
     * @return InteractiveDistance
     */
    public function setDistanceType(string $distanceType): InteractiveDistance
    {
        $this->distanceType = $distanceType;
        return $this;
    }
}