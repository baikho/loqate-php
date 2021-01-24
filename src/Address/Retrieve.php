<?php

declare(strict_types=1);

namespace Baikho\Loqate\Address;

use Baikho\Loqate\BaseLoqateRequest;

class Retrieve extends BaseLoqateRequest
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