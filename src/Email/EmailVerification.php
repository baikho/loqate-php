<?php

declare(strict_types=1);

namespace Baikho\Loqate\Email;

use Baikho\Loqate\KeyableTrait;

/**
 * Class EmailVerification.
 *
 * @package Baikho\Loqate\Email
 */
class EmailVerification
{
    use KeyableTrait;

    /**
     * EmailVerification constructor.
     *
     * @param string $key
     */
    public function __construct(string $key)
    {
        $this->key = $key;
    }

    /**
     * Validate v2.
     *
     * @param string $email
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function validate(string $email)
    {
        return (new Validate($this->getKey(), $email))->makeRequest();
    }
}
