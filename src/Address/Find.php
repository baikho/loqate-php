<?php

declare(strict_types=1);

namespace Baikho\Loqate\Address;

use Baikho\Loqate\BaseClient;

/**
 * Class Find v1.1.
 *
 * @package Baikho\Loqate\Address
 * @see https://www.loqate.com/resources/support/apis/Capture/Interactive/Find/1.1/
 */
class Find extends BaseClient
{
    /**
     * The search text to find. Ideally a postcode or the start of the address.
     *
     * @var string|null
     */
    protected ?string $text;

    /**
     * Whether the API is being called from a middleware implementation (and therefore the calling IP address should not be used for biasing).
     *
     * @var bool|null
     */
    protected ?bool $isMiddleware;

    /**
     * A container for the search. This should only be another Id previously returned from this service when the Type of the result was not 'Address'.
     *
     * @var string|null
     */
    protected ?string $container;

    /**
     * A starting location for the search. This can be the name or ISO 2 or 3 character code of a country, WGS84 coordinates (comma separated) or IP address to search from.
     *
     * @var string|null
     */
    protected ?string $origin;

    /**
     * A comma separated list of ISO 2 or 3 character country codes to limit the search within.
     *
     * @var string|null
     */
    protected ?string $countries;

    /**
     * The maximum number of results to return.
     *
     * @var int|null
     */
    protected ?int $limit;

    /**
     * The preferred language for results. This should be a 2 or 4 character language code e.g. (en, fr, en-gb, en-us etc).
     *
     * @var string|null
     */
    protected ?string $language;

    /**
     * Enable/Disable biasing.
     *
     * @var bool|null
     */
    protected ?bool $bias;

    /**
     * V4 Shadowterms.
     *
     * @var string|null
     */
    protected ?string $filters;

    /**
     * V4 GeoFence.
     *
     * @var string|null
     */
    protected ?string $geoFence;

    /**
     * Find constructor.
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
     * @param string|null $geoFence
     */
    public function __construct(string $key, string $text = null, bool $isMiddleware = null, string $container = null, string $origin = null, string $countries = null, int $limit = null, string $language = null, bool $bias = null, string $filters = null, string $geoFence = null)
    {
        parent::__construct($key);
        $this->text = $text;
        $this->isMiddleware = $isMiddleware;
        $this->container = $container;
        $this->origin = $origin;
        $this->countries = $countries;
        $this->limit = $limit;
        $this->language = $language;
        $this->bias = $bias;
        $this->filters = $filters;
        $this->geoFence = $geoFence;
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
        $this->text = $parameters['text'] ?? null;
        $this->isMiddleware = $parameters['isMiddleware'] ?? null;
        $this->container = $parameters['container'] ?? null;
        $this->origin = $parameters['origin'] ?? null;
        $this->countries = $parameters['countries'] ?? null;
        $this->limit = $parameters['limit'] ?? null;
        $this->language = $parameters['language'] ?? null;
        $this->bias = $parameters['bias'] ?? null;
        $this->filters = $parameters['filters'] ?? null;
        $this->geoFence = $parameters['geoFence'] ?? null;
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
     * Sets the origin.
     *
     * @param string $origin
     * @return Find
     */
    public function setOrigin(string $origin): Find
    {
        $this->origin = $origin;
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

    /**
     * Sets the limit.
     *
     * @param int $limit
     * @return Find
     */
    public function setLimit(int $limit): Find
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Sets the language.
     *
     * @param string $language
     * @return Find
     */
    public function setLanguage(string $language): Find
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Sets the bias.
     *
     * @param bool $bias
     * @return Find
     */
    public function setBias(bool $bias): Find
    {
        $this->bias = $bias;
        return $this;
    }

    /**
     * Sets the filters.
     *
     * @param string $filters
     * @return Find
     */
    public function setFilters(string $filters): Find
    {
        $this->filters = $filters;
        return $this;
    }

    /**
     * Sets the geo fence.
     *
     * @param string $geoFence
     * @return Find
     */
    public function setGeoFence(string $geoFence): Find
    {
        $this->geoFence = $geoFence;
        return $this;
    }
}
