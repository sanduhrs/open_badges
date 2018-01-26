<?php

namespace sanduhrs\OpenBadges;

use sanduhrs\OpenBadges\JsonLd\Serializer;
use JsonSerializable;

/**
 * Class CryptographicKey.
 *
 * @package sanduhrs\OpenBadges
 */
class CryptographicKey implements JsonSerializable
{
    use Serializer;

    /**
     * Unique IRI.
     *
     * The identifier for the key. Most platforms only support HTTP(s)
     * identifiers.
     *
     * @var string
     */
    protected $id;

    /**
     * The identifier for the Profile that owns this key.
     *
     * There should be a two-way connection between this Profile and the
     * CryptographicKey through the owner and publicKey properties.
     *
     * @var string
     */
    protected $owner;

    /**
     * Public key.
     *
     * The PEM key encoding is a widely-used method to express public keys,
     * compatible with almost every Secure Sockets Layer library implementation.
     *
     * @var string
     */
    protected $publicKeyPem;

    /**
     * CryptographicKey constructor.
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
     * @return CryptographicKey
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     *
     * @return CryptographicKey
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublicKeyPem()
    {
        return $this->publicKeyPem;
    }

    /**
     * @param string $publicKeyPem
     *
     * @return CryptographicKey
     */
    public function setPublicKeyPem($publicKeyPem)
    {
        $this->publicKeyPem = $publicKeyPem;
        return $this;
    }
}
