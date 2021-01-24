<?php

declare(strict_types=1);

namespace Baikho\Loqate;

use Psr\Http\Message\StreamInterface;

/**
 * Interface ClientInterface.
 *
 * @package Baikho\Loqate
 */
interface ClientInterface
{
  /**
   * Return the request root URI.
   *
   * @param string $uri
   * @return string
   */
  public function getRootUri(string $uri): string;

  /**
   * Gets the request URI.
   *
   * @return string
   */
  public function getUri(): string;

  /**
   * Return the API key.
   *
   * @return string
   */
  public function getKey(): string;

  /**
   * Get array output.
   */
  public function toArray(): array;

  /**
   * Sets the request parameters.
   *
   * @param array $parameters
   * @return self
   */
  public function setParams(array $parameters): self;

  /**
   * Do the request.
   *
   * @return \Psr\Http\Message\StreamInterface
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function makeRequest(): StreamInterface;

}
