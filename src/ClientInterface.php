<?php

declare(strict_types=1);

namespace Baikho\Loqate;

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
   * @return string
   */
  public function getRootUri(): string;

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
   * Holds the results of the query.
   *
   * @return string
   */
  public function getData(): string;

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
   * @return mixed
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function makeRequest();

}
