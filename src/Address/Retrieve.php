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
   * The Id from a Find method to retrieve the details for.
   *
   * @var string|null
   */
  protected ?string $id;

  /**
   * The FieldxFormat fields can be used to return extra data fields into the corresponding Fieldx response. This needs to be supplied in the format of {{FieldName}}.
   *
   * @var string|null
   */
  protected ?string $field1Format;

  /**
   * Retrieve constructor.
   *
   * @param string $key
   * @param string|null $id
   * @param string|null $field1Format
   */
  public function __construct(string $key, string $id = NULL, string $field1Format = NULL)
  {
    parent::__construct($key);
    $this->id = $id;
    $this->field1Format = $field1Format;
  }

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
