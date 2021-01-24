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

}
