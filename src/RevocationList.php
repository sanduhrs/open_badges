<?php

namespace sanduhrs\OpenBadges;

use sanduhrs\OpenBadges\JsonLd\Serializer;
use JsonSerializable;

class RevocationList implements JsonSerializable
{
    use Serializer;

    /**
     * The id of the RevocationList.
     *
     * @var string
     */
    public $id;

    /**
     * The id of the Issuer.
     *
     * @var string
     */
    public $issuer;

    /**
     * Revoked assertions.
     *
     * An array of string id or UID-based identifications of badge objects that
     * have been revoked.
     *
     * @var string[]
     */
    public $revokedAssertions;

    /**
     * RevocationList constructor.
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
     * @return RevocationList
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * @param string $issuer
     *
     * @return RevocationList
     */
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRevokedAssertions()
    {
        return $this->revokedAssertions;
    }

    /**
     * @param string[] $revokedAssertions
     *
     * @return RevocationList
     */
    public function setRevokedAssertions($revokedAssertions)
    {
        $this->revokedAssertions = $revokedAssertions;
        return $this;
    }
}
