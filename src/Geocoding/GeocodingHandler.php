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
}