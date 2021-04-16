<?php

declare(strict_types=1);

namespace Baikho\Loqate\BankAccount;

use Baikho\Loqate\BaseClient;

/**
 * Class Validate v2.
 *
 * @package Baikho\Loqate\BankAccount
 * @see https://www.loqate.com/resources/support/apis/BankAccountValidation/Interactive/Validate/2/
 */
class Validate extends BaseClient
{
    /**
     * The bank account number to validate.
     *
     * @var string|null
     */
    protected ?string $accountNumber;

    /**
     * The branch sort code for the account number.
     *
     * @var string|null
     */
    protected ?string $sortCode;

    /**
     * Validate constructor.
     *
     * @param string $key
     * @param string|null $accountNumber
     * @param string|null $sortCode
     */
    public function __construct(string $key, string $accountNumber = null, string $sortCode = null)
    {
        parent::__construct($key);
        $this->accountNumber = $accountNumber;
        $this->sortCode = $sortCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getUri(): string
    {
        return 'BankAccountValidation/Interactive/Validate/2/';
    }

    /**
     * {@inheritdoc}
     */
    public function setParams(array $parameters): self
    {
        // TODO: Implement setParams() method.
    }
}
