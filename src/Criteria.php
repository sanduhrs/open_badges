<?php

namespace sanduhrs\OpenBadges;

use sanduhrs\OpenBadges\JsonLd\Serializer;
use JsonSerializable;

/**
 * Class Criteria.
 *
 * @package sanduhrs\OpenBadges
 */
class Criteria implements JsonSerializable
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
     * A narrative of what is needed to earn the badge.
     *
     * @var string
     */
    protected $narrative;

    /**
     * Criteria constructor.
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
     * @return Criteria
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->narrative;
    }

    /**
     * @param string $narrative
     * @return Criteria
     */
    public function setNarrative($narrative)
    {
        $this->narrative = $narrative;
        return $this;
    }
}
