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
     * @var string|null
     */
    protected ?string $field2Format;

    /**
     * @var string|null
     */
    protected ?string $field3Format;

    /**
     * @var string|null
     */
    protected ?string $field4Format;

    /**
     * @var string|null
     */
    protected ?string $field5Format;

    /**
     * @var string|null
     */
    protected ?string $field6Format;

    /**
     * @var string|null
     */
    protected ?string $field7Format;

    /**
     * @var string|null
     */
    protected ?string $field8Format;

    /**
     * @var string|null
     */
    protected ?string $field9Format;

    /**
     * @var string|null
     */
    protected ?string $field10Format;

    /**
     * @var string|null
     */
    protected ?string $field11Format;

    /**
     * @var string|null
     */
    protected ?string $field12Format;

    /**
     * @var string|null
     */
    protected ?string $field13Format;

    /**
     * @var string|null
     */
    protected ?string $field14Format;

    /**
     * @var string|null
     */
    protected ?string $field15Format;

    /**
     * @var string|null
     */
    protected ?string $field16Format;

    /**
     * @var string|null
     */
    protected ?string $field17Format;

    /**
     * @var string|null
     */
    protected ?string $field18Format;

    /**
     * @var string|null
     */
    protected ?string $field19Format;

    /**
     * @var string|null
     */
    protected ?string $field20Format;

    /**
     * Retrieve constructor.
     *
     * @param string $key
     * @param string|null $id
     * @param string|null $field1Format
     */
    public function __construct(string $key, string $id = null, string $field1Format = null)
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
        return 'Capture/Interactive/Retrieve/v1/';
    }

    /**
     * {@inheritdoc}
     */
    public function setParams(array $parameters): self
    {
        $this->id = $parameters['id'] ?? null;
        $this->field1Format = $parameters['field1Format'] ?? null;
        $this->field2Format = $parameters['field2Format'] ?? null;
        $this->field3Format = $parameters['field3Format'] ?? null;
        $this->field4Format = $parameters['field4Format'] ?? null;
        $this->field5Format = $parameters['field5Format'] ?? null;
        $this->field6Format = $parameters['field6Format'] ?? null;
        $this->field7Format = $parameters['field7Format'] ?? null;
        $this->field8Format = $parameters['field8Format'] ?? null;
        $this->field9Format = $parameters['field9Format'] ?? null;
        $this->field10Format = $parameters['field10Format'] ?? null;
        $this->field11Format = $parameters['field11Format'] ?? null;
        $this->field12Format = $parameters['field12Format'] ?? null;
        $this->field13Format = $parameters['field13Format'] ?? null;
        $this->field14Format = $parameters['field14Format'] ?? null;
        $this->field15Format = $parameters['field15Format'] ?? null;
        $this->field16Format = $parameters['field16Format'] ?? null;
        $this->field17Format = $parameters['field17Format'] ?? null;
        $this->field18Format = $parameters['field18Format'] ?? null;
        $this->field19Format = $parameters['field19Format'] ?? null;
        $this->field20Format = $parameters['field20Format'] ?? null;
        return $this;
    }

    /**
     * Sets the id.
     *
     * @param string $id
     * @return Retrieve
     */
    public function setId(string $id): Retrieve
    {
        $this->id = $id;
        return $this;
    }
}
