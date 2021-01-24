<?php

declare(strict_types=1);

namespace Baikho\Loqate\Phone;

use Baikho\Loqate\KeyableTrait;

/**
 * Class PhoneVerification.
 *
 * @package Baikho\Loqate\Phone
 */
class PhoneVerification
{
  use KeyableTrait;

  /**
   * PhoneVerification constructor.
   *
   * @param string $key
   */
  public function __construct(string $key)
  {
    $this->key = $key;
  }

  /**
   * Validate v2.2.
   *
   * @param string $phone
   * @return mixed
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function validate(string $phone)
  {
    return (new Validate($this->getKey(), $phone))->makeRequest();
  }

}
