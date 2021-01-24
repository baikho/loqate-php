<?php

declare(strict_types=1);

namespace Baikho\Loqate\Address;

use Baikho\Loqate\KeyableTrait;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\StreamInterface;

/**
 * Class AddressVerification.
 *
 * @package Baikho\Loqate\Address
 */
class AddressVerification
{
  use KeyableTrait;

  /**
   * Find v1.1.
   *
   * @param string $text
   * @return \Psr\Http\Message\StreamInterface
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function find(string $text): StreamInterface
  {
    return (new Find($this->getKey(), $text))->makeRequest();
  }

  /**
   * Retrieve v1.
   *
   * @param string $id
   * @return \Psr\Http\Message\StreamInterface
   * @throws GuzzleException
   */
  public function retrieve(string $id): StreamInterface
  {
    return (new Retrieve($this->getKey()))->makeRequest();
  }

}
