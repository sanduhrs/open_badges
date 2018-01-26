<?php

namespace sanduhrs\OpenBadges;

use sanduhrs\OpenBadges\JsonLd\Serializer;
use JsonSerializable;

/**
 * Class Image.
 *
 * @package sanduhrs\OpenBadges
 */
class Image implements JsonSerializable
{
    use Serializer;

    /**
     * Unique IRI.
     *
     * The URI or Data URI of the image.
     *
     * @var string
     */
    protected $id;

    /**
     * The caption for the image.
     *
     * @var string
     */
    protected $caption;

    /**
     * The author of the image, if desired.
     *
     * @var \sanduhrs\OpenBadges\Profile
     */
    protected $author;

    /**
     * Image constructor.
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
     * @return Image
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     *
     * @return Image
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @return \sanduhrs\OpenBadges\Profile
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param \sanduhrs\OpenBadges\Profile $author
     *
     * @return Image
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }
}
