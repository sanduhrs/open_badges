<?php

namespace sanduhrs\OpenBadges;

use sanduhrs\OpenBadges\JsonLd\Serializer;
use JsonSerializable;

/**
 * Class VerificationObject.
 *
 * @package sanduhrs\OpenBadges
 */
class Endorsement implements JsonSerializable
{
    use Serializer;

    /**
     * Unique IRI.
     *
     * Unique IRI for the Endorsement instance. If using hosted verification, this
     * should be the URI where the assertion of endorsement is accessible. For
     * signed Assertions, it is recommended to use a UUID in the urn:uuid
     * namespace.
     *
     * @var string
     */
    public $id;

    /**
     * The claim.
     *
     * An entity, identified by an id and additional properties that the
     * endorser would like to claim about that entity.
     *
     * Within the claim property, the endorsed entity may be of any type (though
     * only Open Badges Vocabulary classes are expected to be understood by Open
     * Badges-specific tools. While Endorsement is a very flexible data
     * structure, its usefulness will be limited not by the creativity of
     * endorsers, but by the ability for other tools to discover and understand
     * those endorsements.
     *
     * There is one special property for use in endorsement, the
     * endorsementComment, which allows endorsers to make a simple claim in
     * writing about the entity.
     *
     * @var mixed[]
     */
    public $claim;

    /**
     * The issuer.
     *
     * The profile of the Endorsement’s issuer.
     *
     * @var \sanduhrs\OpenBadges\Profile
     */
    public $issuer;

    /**
     * Timestamp (ISO 8601) of when the endorsement was published.
     *
     * @var string
     */
    public $issuedOn;

    /**
     * Instructions for third parties to verify this assertion of endorsement.
     *
     * @var \sanduhrs\OpenBadges\VerificationObject
     */
    public $verification;

    /**
     * Endorsement constructor.
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
     * @return Endorsement
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getClaim()
    {
        return $this->claim;
    }

    /**
     * @param string $claim
     *
     * @return Endorsement
     */
    public function setClaim($claim)
    {
        $this->claim = $claim;
        return $this;
    }

    /**
     * @return \sanduhrs\OpenBadges\Profile
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * @param \sanduhrs\OpenBadges\Profile $issuer
     *
     * @return Endorsement
     */
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssuedOn()
    {
        return $this->issuedOn;
    }

    /**
     * @param string $issuedOn
     *
     * @return Endorsement
     */
    public function setIssuedOn($issuedOn)
    {
        $this->issuedOn = $issuedOn;
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
     * @return Endorsement
     */
    public function setVerification($verification)
    {
        $this->verification = $verification;
        return $this;
    }
}
