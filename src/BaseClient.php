<?php

declare(strict_types=1);

namespace Baikho\Loqate;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\StreamInterface;

/**
 * Class BaseClient.
 *
 * @package Baikho\Loqate
 */
abstract class BaseClient implements ClientInterface
{
  use KeyableTrait;

  /**
   * {@inheritdoc}
   */
  public function getRootUri(string $uri): string
  {
    return 'https://api.addressy.com/' . $uri . 'json3.ws';
  }

  /**
   * {@inheritdoc}
   */
  public function toArray(): array
  {
    return get_object_vars($this);
  }

  /**
   * {@inheritdoc}
   */
  public function makeRequest(): StreamInterface
  {
    $client = new Client();

    $response = $client->request('GET', $this->getRootUri($this->getUri()), [
      RequestOptions::QUERY => $this->toArray(),
    ]);

    return json_decode($response->getBody());
  }

}
