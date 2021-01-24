<?php

declare(strict_types=1);

namespace Baikho\Loqate\Address;

use Baikho\Loqate\BaseLoqateRequest;

/**
 * Class Find.
 *
 * @package Baikho\Loqate\Address
 */
class Find extends BaseLoqateRequest
{
  /**
   * The search text to find. Ideally a postcode or the start of the address.
   *
   * @var string|null
   */
  private ?string $text;

  /**
   * Whether the API is being called from a middleware implementation (and therefore the calling IP address should not be used for biasing).
   *
   * @var bool|null
   */
  private ?bool $isMiddleware;

  /**
   * A container for the search. This should only be another Id previously returned from this service when the Type of the result was not 'Address'.
   *
   * @var string|null
   */
  private ?string $container;

  /**
   * A starting location for the search. This can be the name or ISO 2 or 3 character code of a country, WGS84 coordinates (comma separated) or IP address to search from.
   *
   * @var string|null
   */
  private ?string $origin;

  /**
   * A comma separated list of ISO 2 or 3 character country codes to limit the search within.
   *
   * @var string|null
   */
  private ?string $countries;

  /**
   * The maximum number of results to return.
   *
   * @var int|null
   */
  private ?int $limit;

  /**
   * The preferred language for results. This should be a 2 or 4 character language code e.g. (en, fr, en-gb, en-us etc).
   *
   * @var string|null
   */
  private ?string $language;

  /**
   * Enable/Disable biasing.
   *
   * @var bool|null
   */
  private ?bool $bias;

  /**
   * V4 Shadowterms.
   *
   * @var string|null
   */
  private ?string $filters;

  /**
   * InteractiveFind constructor.
   *
   * @param string $key
   * @param string|null $text
   * @param bool|null $isMiddleware
   * @param string|null $container
   * @param string|null $origin
   * @param string|null $countries
   * @param int|null $limit
   * @param string|null $language
   * @param bool|null $bias
   * @param string|null $filters
   */
  public function __construct(string $key, string $text = NULL, bool $isMiddleware = NULL, string $container = NULL, string $origin = NULL, string $countries = NULL, int $limit = NULL, string $language = NULL, bool $bias = NULL, string $filters = NULL)
  {
    $this->key = $key;
    $this->text = $text;
    $this->isMiddleware = $isMiddleware;
    $this->container = $container;
    $this->origin = $origin;
    $this->countries = $countries;
    $this->limit = $limit;
    $this->language = $language;
    $this->bias = $bias;
    $this->filters = $filters;
  }

  /**
   * {@inheritdoc}
   */
  public function getUri(): string
  {
    return 'Capture/Interactive/Find/v1.1/';
  }

  /**
   * {@inheritdoc}
   */
  public function setParams(array $parameters): self
  {
    $this->text = $parameters['text'] ?? NULL;
    $this->isMiddleware = $parameters['isMiddleware'] ?? NULL;
    $this->container = $parameters['container'] ?? NULL;
    $this->origin = $parameters['origin'] ?? NULL;
    $this->countries = $parameters['countries'] ?? NULL;
    $this->limit = $parameters['limit'] ?? NULL;
    $this->language = $parameters['language'] ?? NULL;
    $this->bias = $parameters['bias'] ?? NULL;
    $this->filters = $parameters['filters'] ?? NULL;
    return $this;
  }

  /**
   * Sets the text.
   *
   * @param string $text
   * @return Find
   */
  public function setText(string $text): Find
  {
    $this->text = $text;
    return $this;
  }

  /**
   * Sets the is middleware.
   *
   * @param bool $isMiddleware
   * @return Find
   */
  public function setIsMiddleWare(bool $isMiddleware): Find
  {
    $this->isMiddleware = $isMiddleware;
    return $this;
  }

  /**
   * Sets the container.
   *
   * @param string $container
   * @return Find
   */
  public function setContainer(string $container): Find
  {
    $this->container = $container;
    return $this;
  }

  /**
   * Sets the container.
   *
   * @param string $countries
   * @return Find
   */
  public function setCountries(string $countries): Find
  {
    $this->countries = $countries;
    return $this;
  }

}
