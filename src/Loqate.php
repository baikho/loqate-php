<?php

declare(strict_types=1);

namespace Baikho\Loqate;

use Baikho\Loqate\Address\AddressVerification;

/**
 * Class Loqate.
 *
 * @package Baikho\Loqate
 */
class Loqate
{
  /**
   * The key used to authenticate with the service.
   *
   * @var string
   */
  private string $key;

  /**
   * LoqateClient constructor.
   *
   * @param string $key
   */
  public function __construct(string $key)
  {
    $this->key = $key;
  }

  /**
   * Return the API key.
   *
   * @return string
   */
  public function getKey(): string
  {
    return $this->key;
  }

  /**
   * Returns a request builder instance.
   *
   * @param string $class
   * @return LoqateRequestInterface
   */
  public function requestBuilder(string $class): LoqateRequestInterface
  {
    return new $class($this->getKey());
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

}
