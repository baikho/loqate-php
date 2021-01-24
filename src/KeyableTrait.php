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

}