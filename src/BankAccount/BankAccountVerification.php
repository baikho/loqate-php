<?php

declare(strict_types=1);

namespace Baikho\Loqate\BankAccount;

use Baikho\Loqate\KeyableTrait;

/**
 * Class BankAccountVerification.
 *
 * @package Baikho\Loqate\BankAccount
 */
class BankAccountVerification
{
    use KeyableTrait;

    /**
     * BankAccountVerification constructor.
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
     * @param string $accountNumber
     * @param string $sortCode
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function validate(string $accountNumber, string $sortCode)
    {
        return (new Validate($this->getKey(), $accountNumber, $sortCode))->makeRequest();
    }
}
