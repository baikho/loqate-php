<?php

declare(strict_types=1);

namespace Baikho\Loqate\Geocoding;

use Baikho\Loqate\KeyableTrait;

/**
 * Class GeocodingHandler.
 *
 * @package Baikho\Loqate\Geocoding
 */
class GeocodingHandler
{
    use KeyableTrait;

    /**
     * GeocodingHandler constructor.
     *
     * @param string $key
     */
    public function __construct(string $key)
    {
        $this->key = $key;
    }

    /**
     * InteractiveDirections v2
     *
     * @param string $start
     * @param string $finish
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function directions(string $start, string $finish)
    {
        return (new InteractiveDirections($this->key, $start, $finish))->makeRequest();
    }

    /**
     * InteractiveDistance v1
     *
     * @param string $start
     * @param string $finish
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function distance(string $start, string $finish)
    {
        return (new InteractiveDistance($this->key, $start, $finish))->makeRequest();
    }

    /**
     * UK Find v2
     *
     * @param string $location
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function ukFind(string $location)
    {
        return (new UKFind($this->key, $location))->makeRequest();
    }

    /**
     * UK Geocode v2.1
     *
     * @param string $location
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function ukGeocode(string $location)
    {
        return (new UKGeocode($this->key, $location))->makeRequest();
    }

    /**
     * UK Retrieve v2
     *
     * @param string $id
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function ukRetrieve(string $id)
    {
        return (new UKRetrieve($this->key, $id))->makeRequest();
    }

    /**
     * UK Reverse Geocode v1.1
     *
     * @param string $centrePoint
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function ukReverseGeocode(string $centrePoint)
    {
        return (new UKGeocode($this->key, $centrePoint))->makeRequest();
    }
}