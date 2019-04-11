<?php

namespace sanduhrs\OpenBadges;

use sanduhrs\OpenBadges\JsonLd\Serializer;
use JsonSerializable;

/**
 * Class VerificationObject.
 *
 * @package sanduhrs\OpenBadges
 */
class VerificationObject implements JsonSerializable
{
    use Serializer;

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
     * The @id of the property to be used for verification.
     *
     * The @id of the property to be used for verification that an Assertion is
     * within the allowed scope. Only id is supported. Verifiers will consider id
     * the default value if verificationProperty is omitted or if an issuer
     * Profile has no explicit verification instructions, so it may be safely
     * omitted.
     *
     * @var string
     */
    protected $verificationProperty;

    /**
     * The URI fragment that the verification property must start with.
     *
     * Valid Assertions must have an id within this scope. Multiple values
     * allowed, and Assertions will be considered valid if their id starts with
     * one of these values.
     *
     * @var string
     */
    protected $startsWith;

    /**
     * The hostname component of allowed origins.
     *
     * Any id URI within one of the allowedOrigins will be considered valid.
     *
     * @var
     */
    protected $allowedOrigins;

    /**
     * VerificationObject constructor.
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return VerificationObject
     */
    public function setType($type)
    {
        $this->type= $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getVerificationProperty()
    {
        return $this->verificationProperty;
    }

    /**
     * @param string $verificationProperty
     *
     * @return VerificationObject
     */
    public function setVerificationProperty($verificationProperty)
    {
        $this->verificationProperty = $verificationProperty;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartsWith()
    {
        return $this->startsWith;
    }

    /**
     * @param string $startsWith
     *
     * @return VerificationObject
     */
    public function setStartsWith($startsWith)
    {
        $this->startsWith = $startsWith;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAllowedOrigins()
    {
        return $this->allowedOrigins;
    }

    /**
     * @param mixed $allowedOrigins
     *
     * @return VerificationObject
     */
    public function setAllowedOrigins($allowedOrigins)
    {
        $this->allowedOrigins = $allowedOrigins;
        return $this;
    }
}
