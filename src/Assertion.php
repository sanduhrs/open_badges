<?php

namespace sanduhrs\OpenBadges;

use sanduhrs\OpenBadges\JsonLd\Serializer;
use JsonSerializable;

/**
 * Class Assertion.
 *
 * @package sanduhrs\OpenBadges
 */
class Assertion implements JsonSerializable
{
    use Serializer;

    /**
     * Unique IRI.
     *
     * If using hosted verification, this should be the URI where the assertion is
     * accessible. For signed Assertions, it is recommended to use a UUID in the
     * urn:uuid namespace.
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
     * The recipient of the achievement.
     *
     * @var IdentityObject
     */
    protected $recipient;

    /**
     * A document that describes the type of badge being awarded.
     *
     * @var BadgeClass
     */
    protected $badge;

    /**
     * Instructions for third parties to verify this assertion.
     *
     * @var VerificationObject
     */
    protected $verification;

    /**
     * Timestamp (ISO 8601) of when the achievement was awarded.
     *
     * @var string
     */
    protected $issuedOn;

    /**
     * A document representing an image representing this user’s achievement.
     *
     * @var Image
     */
    protected $image;

    /**
     * A document describing the work the recipient did to earn the achievement.
     *
     * @var Evidence
     */
    protected $evidence;

    /**
     * A narrative that connects multiple pieces of evidence.
     *
     * @var string
     */
    protected $narrative;

    /**
     * Timestamp (ISO 8601) when a badge should no longer be considered valid.
     *
     * @var string
     */
    protected $expires;

    /**
     * Revocation status.
     *
     * @var bool
     */
    protected $revoked;

    /**
     * Revocation reason.
     *
     * @var string
     */
    protected $revocationReason;

    /**
     * Unique Identifier for the badge.
     *
     * @type string
     *
     * @deprecated
     */
    protected $uid;

    /**
     * Assertion constructor.
     *
     * @param array $parameters
     */
    public function __construct($parameters = [])
    {
        $parameters += [
            "type" => "Assertion",
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
     * @return Assertion
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
     * @return Assertion
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return \sanduhrs\OpenBadges\IdentityObject
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param \sanduhrs\OpenBadges\IdentityObject $recipient
     *
     * @return Assertion
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @return \sanduhrs\OpenBadges\BadgeClass
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * @param \sanduhrs\OpenBadges\BadgeClass $badge
     *
     * @return Assertion
     */
    public function setBadge($badge)
    {
        $this->badge = $badge;
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
     * @return Assertion
     */
    public function setVerification($verification)
    {
        $this->verification = $verification;
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
     * @return Assertion
     */
    public function setIssuedOn($issuedOn)
    {
        $this->issuedOn = $issuedOn;
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
     * @return Assertion
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return \sanduhrs\OpenBadges\Evidence
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * @param \sanduhrs\OpenBadges\Evidence $evidence
     *
     * @return Assertion
     */
    public function setEvidence($evidence)
    {
        $this->evidence = $evidence;
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
     * @return Assertion
     */
    public function setNarrative($narrative)
    {
        $this->narrative = $narrative;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param string $expires
     *
     * @return Assertion
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRevoked()
    {
        return $this->revoked;
    }

    /**
     * @param bool $revoked
     *
     * @return Assertion
     */
    public function setRevoked($revoked)
    {
        $this->revoked = $revoked;
        return $this;
    }

    /**
     * @return string
     */
    public function getRevocationReason()
    {
        return $this->revocationReason;
    }

    /**
     * @param string $revocationReason
     *
     * @return Assertion
     */
    public function setRevocationReason($revocationReason)
    {
        $this->revocationReason = $revocationReason;
        return $this;
    }

    /**
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param string $uid
     *
     * @return Assertion
     */
    public function setUid($uid)
    {
        @trigger_error(
            'uid has been replaced by the IRI-based id property. It should not be used in v2.0+ Assertions.',
            E_USER_DEPRECATED
        );
        $this->uid = $uid;
        return $this;
    }
}
