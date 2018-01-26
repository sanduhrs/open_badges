<?php

namespace sanduhrs\OpenBadges;

use JsonSerializable;
use sanduhrs\OpenBadges\Endorsement;
use sanduhrs\OpenBadges\JsonLd\Serializer;

/**
 * Class Criteria.
 *
 * @package sanduhrs\OpenBadges
 */
class Version implements JsonSerializable
{
    use Serializer;

    /**
     * Identifies related versions of the entity.
     *
     * @var string
     */
    protected $related;

    /**
     * The version identifier for the present edition of the entity.
     *
     * @var string
     */
    protected $version;

    /**
     * Relevant endorsement(s) that make claims about this entity.
     *
     * Note: As endorsements must be published after the publication of the
     * entity they endorse, it will not always be possible to establish a
     * two-way linkage with this property.
     *
     * @var \sanduhrs\OpenBadges\Endorsement
     */
    protected $endorsement;

    /**
     * Version constructor.
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
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * @param string $related
     * @return Version
     */
    public function setRelated($related)
    {
        $this->related = $related;
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
     * @return Version
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return \sanduhrs\OpenBadges\Endorsement
     */
    public function getEndorsement()
    {
        return $this->endorsement;
    }

    /**
     * @param \sanduhrs\OpenBadges\Endorsement $endorsement
     * @return Version
     */
    public function setEndorsement($endorsement)
    {
        $this->endorsement = $endorsement;
        return $this;
    }
}
