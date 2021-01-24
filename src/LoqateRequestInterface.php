<?php

declare(strict_types=1);

namespace Baikho\Loqate;

/**
 * Interface LoqateRequestInterface.
 *
 * @package Baikho\Loqate
 */
interface LoqateRequestInterface
{
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
   * Sets the request parameters.
   *
   * @param array $parameters
   * @return self
   */
  public function setParams(array $parameters): self;

}
