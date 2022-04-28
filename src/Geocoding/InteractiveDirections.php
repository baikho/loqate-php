<?php

declare(strict_types=1);

namespace Baikho\Loqate\Geocoding;

use Baikho\Loqate\BaseClient;

/**
 * Class InteractiveDirections v2.
 *
 * @package Baikho\Loqate\Geocoding
 * @see https://www.loqate.com/resources/support/apis/DistancesAndDirections/Interactive/Directions/2/
 */
class InteractiveDirections extends BaseClient
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
     * The day of the week the route is to start on. Provide this parameter only if you wish to utilise superior
     * 'Speed Profiles' historic traffic speed data over time for avoiding rush hours and such. Allowed values are:
     *
     *      null
     *      Monday
     *      Tuesday
     *      Wednesday
     *      Thursday
     *      Friday
     *      Saturday
     *      Sunday
     *
     * @var string|null
     */
    protected ?string $startDay;

    /**
     * The time of day the route is to start on, measured in whole minutes from midnight. (E.g. 8:30am is
     * entered as 510.) Provide this parameter only if you wish to utilise superior 'Speed Profiles'
     * historic traffic speed data over time for avoiding rush hours and such.
     *
     * @var string|null
     */
    protected ?string $startTime;

    /**
     * Find constructor.
     *
     * @param string $key
     * @param string|null $start
     * @param string|null $finish
     * @param string|null $wayPoints
     * @param string|null $distanceType
     * @param string|null $startDay
     * @param string|null $startTime
     */
    public function __construct(string $key, string $start = null, string $finish = null, string $wayPoints = null, string $distanceType = null, string $startDay = null, string $startTime = null)
    {
        parent::__construct($key);
        $this->start = $start;
        $this->finish = $finish;
        $this->wayPoints = $wayPoints;
        $this->distanceType = $distanceType;
        $this->startDay = $startDay;
        $this->startTime = $startTime;
    }

    /**
     * {@inheritdoc}
     */
    public function getUri(): string
    {
        return 'DistancesAndDirections/Interactive/Directions/v2/';
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
        $this->startDay = $parameters['startDay'] ?? null;
        $this->startTime = $parameters['startTime'] ?? null;
        return $this;
    }

    /**
     * Sets the start.
     *
     * @param string $start
     * @return InteractiveDirections
     */
    public function setStart(string $start): InteractiveDirections
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Sets the finish.
     *
     * @param string $finish
     * @return InteractiveDirections
     */
    public function setFinish(string $finish): InteractiveDirections
    {
        $this->finish = $finish;
        return $this;
    }

    /**
     * Sets the wayPoints.
     *
     * @param string $wayPoints
     * @return InteractiveDirections
     */
    public function setWayPoints(string $wayPoints): InteractiveDirections
    {
        $this->wayPoints = $wayPoints;
        return $this;
    }

    /**
     * Sets the distanceType.
     *
     * @param string $distanceType
     * @return InteractiveDirections
     */
    public function setDistanceType(string $distanceType): InteractiveDirections
    {
        $this->distanceType = $distanceType;
        return $this;
    }

    /**
     * Sets the startDay.
     *
     * @param string $startDay
     * @return InteractiveDirections
     */
    public function setStartDay(string $startDay): InteractiveDirections
    {
        $this->startDay = $startDay;
        return $this;
    }

    /**
     * Sets the startTime.
     *
     * @param string $startTime
     * @return InteractiveDirections
     */
    public function setStartTime(string $startTime): InteractiveDirections
    {
        $this->startTime = $startTime;
        return $this;
    }
}