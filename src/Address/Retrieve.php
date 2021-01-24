<?php

declare(strict_types=1);

namespace Baikho\Loqate\Address;

use Baikho\Loqate\BaseClient;

/**
 * Class Retrieve v1.
 *
 * @package Baikho\Loqate\Address
 * @see https://www.loqate.com/resources/support/apis/Capture/Interactive/Retrieve/1/
 */
class Retrieve extends BaseClient
{
  /**
   * {@inheritdoc}
   */
  public function getUri(): string
  {
    return 'Capture/Interactive/Retrieve/v1';
  }

  /**
   * {@inheritdoc}
   */
  public function setParams(array $parameters): self
  {
    // TODO: Implement setParams() method.
  }

}
