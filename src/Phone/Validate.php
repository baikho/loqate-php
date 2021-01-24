<?php

namespace Baikho\Loqate\Phone;

use Baikho\Loqate\BaseClient;

/**
 * Class Validate v2.2.
 *
 * @package Baikho\Loqate\Phone
 * @see https://www.loqate.com/resources/support/apis/PhoneNumberValidation/Interactive/Validate/2.2/
 */
class Validate extends BaseClient
{
  /**
   * The mobile/cell phone number to verify. This must be in international format (+447528471411 or 447528471411) if no country code is provided or national format with a Country parameter provided (07528471411 and GB as the Country parameter).
   *
   * @var string|null
   */
  protected ?string $phone;

  /**
   * The ISO2 country code of the number you are trying to validate (if provided in national format).
   *
   * @var string|null
   */
  protected ?string $country;

  /**
   * Validate constructor.
   *
   * @param string $key
   * @param string|null $phone
   * @param string|null $country
   */
  public function __construct(string $key, string $phone = NULL, string $country = NULL)
  {
    parent::__construct($key);
    $this->phone = $phone;
    $this->country = $country;
  }

  /**
   * {@inheritdoc}
   */
  public function getUri(): string
  {
    return 'PhoneNumberValidation/Interactive/Validate/v2.2/';
  }

  /**
   * {@inheritdoc}
   */
  public function setParams(array $parameters): self
  {
    // TODO: Implement setParams() method.
  }

  /**
   * Sets the phone number.
   *
   * @param string $phone
   * @return Validate
   */
  public function setPhone(string $phone): Validate
  {
    $this->phone = $phone;
    return $this;
  }

  /**
   * Sets the country.
   *
   * @param string $country
   * @return Validate
   */
  public function setCountry(string $country): Validate
  {
    $this->country = $country;
    return $this;
  }

}