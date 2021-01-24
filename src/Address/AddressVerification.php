<?php

declare(strict_types=1);

namespace Baikho\Loqate\Address;

use Baikho\Loqate\BaseClient;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\StreamInterface;

/**
 * Class AddressVerification.
 *
 * @package Baikho\Loqate\Address
 */
class AddressVerification extends BaseClient
{
  /**
   * @param string $text
   * @return \Psr\Http\Message\StreamInterface
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function find(string $text): StreamInterface
  {
    return $this->makeRequest(new Find($this->getKey(), $text));
  }

  /**
   * @param string $id
   * @return \Psr\Http\Message\StreamInterface
   * @throws GuzzleException
   */
  public function retrieve(string $id): StreamInterface
  {
    return $this->makeRequest($retrieve = NULL);
  }

}
