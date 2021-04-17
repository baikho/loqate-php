<?php

declare(strict_types=1);

namespace Baikho\Loqate\Email;

use Baikho\Loqate\BaseClient;

/**
 * Class Validate v2.
 *
 * @package Baikho\Loqate\Email
 * @see https://www.loqate.com/resources/support/apis/EmailValidation/Interactive/Validate/2/
 */
class Validate extends BaseClient
{
    /**
     * The email address to verify.
     *
     * @var string|null
     */
    protected ?string $email;

    /**
     * The time (in milliseconds) you want to give for the validation attempt to be executed within. Value must be between 1 and 15000 (values outside of these ranges will fallback to the default of 15000).
     *
     * @var int|null
     */
    protected ?int $timeout;

    /**
     * Validate constructor.
     *
     * @param string $key
     * @param string|null $email
     * @param int|null $timeout
     */
    public function __construct(string $key, string $email = null, int $timeout = null)
    {
        parent::__construct($key);
        $this->email = $email;
        $this->timeout = $timeout;
    }

    /**
     * {@inheritdoc}
     */
    public function getUri(): string
    {
        return 'EmailValidation/Interactive/Validate/v2/';
    }

    /**
     * {@inheritdoc}
     */
    public function setParams(array $parameters): self
    {
        // TODO: Implement setParams() method.
    }

    /**
     * Sets the email address.
     *
     * @param string $email
     * @return Validate
     */
    public function setEmail(string $email): Validate
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Sets the timeout.
     *
     * @param int $timeout
     * @return Validate
     */
    public function setTimeOut(int $timeout): Validate
    {
        $this->timeout = $timeout;
        return $this;
    }
}
