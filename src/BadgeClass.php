<?php

namespace sanduhrs\OpenBadges;

use sanduhrs\OpenBadges\JsonLd\Serializer;
use JsonSerializable;

/**
 * Class BadgeClass.
 *
 * @package sanduhrs\OpenBadges
 */
class BadgeClass implements JsonSerializable
{
    use Serializer;

    /**
     * Unique IRI.
     *
     * Most platforms to date can only handle HTTP-based IRIs. Issuers using
     * signed assertions are encouraged to publish BadgeClasses using HTTP IRIs
     * but may instead use ephemeral BadgeClasses that use an id in another scheme
     * such as urn:uuid.
     *
     * @type string
     */
    protected $id;

    /**
     * Type.
     *
     * Valid JSON-LD representation of the Assertion type. In most cases, this will simply be the string Assertion. An
     * array including Assertion and other string elements that are either URLs or compact IRIs within the current
     * context are allowed.
     *
     * @type string
     */
    protected $type;

    /**
     * The name of the achievement.
     *
     * @var string
     */
    protected $name;

    /**
     * The version of the achievement.
     *
     * @var string
     */
    protected $version;

    /**
     * A short description of the achievement.
     *
     * @var string
     */
    protected $description;

    /**
     * A document representing an image representing the achievement.
     *
     * @var \sanduhrs\OpenBadges\Image
     */
    protected $image;

    /**
     * A criteria document describing how to earn the achievement.
     *
     * @var \sanduhrs\OpenBadges\Criteria
     */
    protected $criteria;

    /**
     * A document describing individual, entity, organization that issued badge.
     *
     * @var \sanduhrs\OpenBadges\Profile\Issuer
     */
    protected $issuer;

    /**
     * List of alignments.
     *
     * List of objects describing which objectives or educational standards this
     * badge aligns to, if any.
     *
     * @var \sanduhrs\OpenBadges\AlignmentObject[]
     */
    protected $alignment;

    /**
     * List of tags that describe the type of achievement.
     *
     * @var string[]
     */
    protected $tags;

    /**
     * List of relations that identifiy related versions of the entity.
     *
     * @var \sanduhrs\OpenBadges\Relation[]
     */
    protected $related;

    /**
     * BadgeClass constructor.
     *
     * @param array $parameters
     */
    public function __construct($parameters = [])
    {
        $parameters += [
            "type" => "BadgeClass",
        ];
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
     * @return BadgeClass
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return BadgeClass
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @return BadgeClass
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
     * @return BadgeClass
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \sanduhrs\OpenBadges\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param \sanduhrs\OpenBadges\Image $image
     *
     * @return BadgeClass
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return \sanduhrs\OpenBadges\Criteria
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * @param \sanduhrs\OpenBadges\Criteria $criteria
     *
     * @return BadgeClass
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return \sanduhrs\OpenBadges\Profile\Issuer
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * @param \sanduhrs\OpenBadges\Profile\Issuer $issuer
     *
     * @return BadgeClass
     */
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * @return \sanduhrs\OpenBadges\AlignmentObject[]
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * @param \sanduhrs\OpenBadges\AlignmentObject[] $alignment
     *
     * @return BadgeClass
     */
    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     *
     * @return BadgeClass
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
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
     * @return BadgeClass
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * @param string[] $related
     * @return BadgeClass
     */
    public function setRelated($related)
    {
        $this->related = $related;
        return $this;
    }
}
