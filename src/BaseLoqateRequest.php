<?php

declare(strict_types=1);

namespace Baikho\Loqate;

use Baikho\Loqate\Address\Find;

/**
 * Class BaseLoqateRequest.
 *
 * @package Baikho\Loqate
 */
abstract class BaseLoqateRequest implements LoqateRequestInterface
{
  /**
   * The key used to authenticate with the service.
   *
   * @var string
   */
  protected string $key;

  /**
   * {@inheritdoc}
   */
  public function getKey(): string
  {
    return $this->key;
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

  }

}
