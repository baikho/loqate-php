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
abstract class BaseClient
{
  /**
   * The key used to authenticate with the service.
   *
   * @var string
   */
  protected string $key;

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
   * Return the request root URI.
   *
   * @param string $uri
   * @return string
   */
  public function getRootUri(string $uri): string
  {
    return 'https://api.addressy.com/' . $uri . 'json3.ws';
  }

  /**
   * Do the request.
   *
   * @param LoqateRequestInterface $request
   * @return \Psr\Http\Message\StreamInterface
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function makeRequest(LoqateRequestInterface $request): StreamInterface
  {
    $client = new Client();

    $response = $client->request('GET', $this->getRootUri($request->getUri()), [
      RequestOptions::QUERY => $request->toArray(),
    ]);

    return json_decode($response->getBody());
  }

}
