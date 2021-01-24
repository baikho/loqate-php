<?php

namespace Baikho\Loqate;

/**
 * Trait KeyableTrait.
 *
 * @package Baikho\Loqate
 */
trait KeyableTrait
{
  /**
   * The key used to authenticate with the service.
   *
   * @var string
   */
  protected string $key;

  /**
   * Return the API key.
   *
   * @return string
   */
  public function getKey(): string
  {
    return $this->key;
  }

}