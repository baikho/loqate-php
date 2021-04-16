<?php

declare(strict_types=1);

namespace Baikho\Loqate\Address;

use Baikho\Loqate\KeyableTrait;

/**
 * Class AddressVerification.
 *
 * @package Baikho\Loqate\Address
 */
class AddressVerification
{
    use KeyableTrait;

    /**
     * AddressVerification constructor.
     *
     * @param string $key
     */
    public function __construct(string $key)
    {
        $this->key = $key;
    }

    /**
     * Find v1.1.
     *
     * @param string $text
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function find(string $text)
    {
        return (new Find($this->getKey(), $text))->makeRequest();
    }

    /**
     * Retrieve v1.
     *
     * @param string $id
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function retrieve(string $id)
    {
        return (new Retrieve($this->getKey(), $id))->makeRequest();
    }
}
