<?php

namespace sanduhrs\OpenBadges;

use sanduhrs\OpenBadges\JsonLd\Serializer;
use JsonSerializable;

/**
 * Class Criteria.
 *
 * @package sanduhrs\OpenBadges
 */
class Relation implements JsonSerializable
{
    use Serializer;

    /**
     * Unique IRI.
     *
     * The URI of a webpage that describes in a human-readable format the criteria
     * for the BadgeClass.
     *
     * @var string
     */
    protected $id;

    /**
     * A version number the badge.
     *
     * @var string
     */
    protected $version;

    /**
     * Relation constructor.
     *
     * @param array $parameters
     */
    public function __construct($parameters = [])
    {
        $parameters += [];
        foreach ($parameters as $name => $value) {
            if (method_exists($this, "set" . ucfirst($name))) {
                $this->{"set" . ucfirst($name)}($value);
            }
        }
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Relation
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return Relation
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
}
