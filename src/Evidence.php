<?php

namespace sanduhrs\OpenBadges;

use sanduhrs\OpenBadges\JsonLd\Serializer;
use JsonSerializable;

/**
 * Class Evidence.
 *
 * @package sanduhrs\OpenBadges
 */
class Evidence implements JsonSerializable
{
    use Serializer;

    /**
     * Unique IRI.
     *
     * The URI of a webpage presenting evidence of achievement.
     *
     * @var string
     */
    protected $id;

    /**
     * A narrative that describes the evidence and process of achievement that led to an Assertion.
     *
     * @var string
     */
    protected $narrative;

    /**
     * A descriptive title of the evidence.
     *
     * @var string
     */
    protected $name;

    /**
     * A longer description of the evidence.
     *
     * @var string
     */
    protected $description;

    /**
     * A string that describes the type of evidence.
     *
     * For example, Poetry, Prose, Film.
     *
     * @var string
     */
    protected $genre;

    /**
     * A description of the intended audience for a piece of evidence.
     *
     * @var string
     */
    protected $audience;

    /**
     * Evidence constructor.
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
     *
     * @return Evidence
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
     *
     * @return Evidence
     */
    public function setNarrative($narrative)
    {
        $this->narrative = $narrative;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Evidence
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Evidence
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     *
     * @return Evidence
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param string $audience
     *
     * @return Evidence
     */
    public function setAudience($audience)
    {
        $this->audience = $audience;
        return $this;
    }
}
