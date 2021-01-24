<?php

declare(strict_types=1);

namespace Baikho\Loqate;

use Baikho\Loqate\Address\AddressVerification;
use Baikho\Loqate\BankAccount\BankAccountVerification;
use Baikho\Loqate\Phone\PhoneVerification;

/**
 * Class Loqate.
 *
 * @package Baikho\Loqate
 */
class Loqate
{
    use KeyableTrait;

    /**
     * Loqate constructor.
     *
     * @param string $key
     */
    public function __construct(string $key)
    {
        $this->key = $key;
    }

    /**
     * Get the Address Verification API.
     *
     * @return AddressVerification
     */
    public function address(): AddressVerification
    {
        return new AddressVerification($this->getKey());
    }

    /**
     * Get the Phone Verification API.
     *
     * @return PhoneVerification
     */
    public function phone(): PhoneVerification
    {
        return new PhoneVerification($this->getKey());
    }

    /**
     * Get the Bank Account Verification API.
     *
     * @return BankAccountVerification
     */
    public function bankAccount(): BankAccountVerification
    {
        return new BankAccountVerification($this->getKey());
    }
}
