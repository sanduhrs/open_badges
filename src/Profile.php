<?php

namespace sanduhrs\OpenBadges;

use sanduhrs\OpenBadges\JsonLd\Serializer;
use JsonSerializable;

/**
 * Class Profile.
 *
 * @package sanduhrs\OpenBadges
 */
class Profile implements JsonSerializable
{
    use Serializer;

    /**
     * Unique IRI.
     *
     * Most platforms to date can only handle HTTP-based IRIs.
     *
     * @type string
     */
    protected $id;

    /**
     * The name of the entity or organization.
     *
     * @var string
     */
    protected $name;

    /**
     * The homepage or social media profile of the entity.
     *
     * Should be a URL/URI Accessible via HTTP.
     *
     * @var string
     */
    protected $url;

    /**
     * A phone number for the entity.
     *
     * For maximum compatibility, the value should be expressed as a + and country
     * code followed by the number with no spaces or other punctuation, like
     * +16175551212 (E.164).
     *
     * @var string
     */
    protected $telephone;

    /**
     * A short description of the issuer entity or organization.
     *
     * @var string
     */
    protected $description;

    /**
     * An image representing the issuer.
     *
     * @var string
     */
    protected $image;

    /**
     * Contact address for the individual or organization.
     *
     * @var string
     */
    protected $email;

    /**
     * The key(s) an issuer uses to sign Assertions.
     *
     * @var \sanduhrs\OpenBadges\CryptographicKey[]
     */
    protected $publicKey;

    /**
     * Instructions for how to verify Assertions published by this Profile.
     *
     * @var \sanduhrs\OpenBadges\VerificationObject
     */
    protected $verification;

    /**
     * The Badge Revocation List.
     *
     * HTTP URI of the Badge Revocation List used for marking revocation of signed
     * badges.
     *
     * @var string
     */
    protected $revocationList;

    /**
     * Profile constructor.
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
     * @return Profile
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Profile
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return Profile
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     *
     * @return Profile
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
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
     * @return Profile
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     *
     * @return Profile
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Profile
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return \sanduhrs\OpenBadges\CryptographicKey[]
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @param \sanduhrs\OpenBadges\CryptographicKey[] $publicKey
     *
     * @return Profile
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    /**
     * @return \sanduhrs\OpenBadges\VerificationObject
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * @param \sanduhrs\OpenBadges\VerificationObject $verification
     *
     * @return Profile
     */
    public function setVerification($verification)
    {
        $this->verification = $verification;
        return $this;
    }

    /**
     * @return string
     */
    public function getRevocationList()
    {
        return $this->revocationList;
    }

    /**
     * @param string $revocationList
     *
     * @return Profile
     */
    public function setRevocationList($revocationList)
    {
        $this->revocationList = $revocationList;
        return $this;
    }
}
