<?php

declare(strict_types=1);

namespace Baikho\Loqate;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

/**
 * Class BaseClient.
 *
 * @package Baikho\Loqate
 */
abstract class BaseClient implements ClientInterface
{
  use KeyableTrait;

  /**
   * Holds the results of the query.
   *
   * @var string
   */
  private string $data;

  /**
   * BaseClient constructor.
   *
   * @param string $key
   */
  public function __construct(string $key)
  {
    $this->key = $key;
  }

  /**
   * {@inheritdoc}
   */
  public function getRootUri(): string
  {
    return 'https://api.addressy.com/' . $this->getUri() . 'json3.ws';
  }

  /**
   * {@inheritdoc}
   */
  public function getData(): string
  {
    return $this->data;
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
  public function makeRequest()
  {
    $client = new Client();

    $response = $client->get($this->getRootUri(), [
      RequestOptions::QUERY => $this->toArray(),
    ]);

    return json_decode($response->getBody()->getContents());
  }

}
