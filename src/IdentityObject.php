<?php

namespace sanduhrs\OpenBadges;

use sanduhrs\OpenBadges\JsonLd\Serializer;
use JsonSerializable;

/**
 * Class IdentityObject.
 *
 * @package sanduhrs\OpenBadges
 */
class IdentityObject implements JsonSerializable
{
    use Serializer;

    const ALGO = 'sha256';

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $identity;

    /**
     * @var bool
     */
    protected $hashed;

    /**
     * @var string
     */
    protected $salt;

    /**
     * IdentityObject constructor.
     *
     * @param array $parameters
     */
    public function __construct($parameters = [])
    {
        $parameters += [
          'hashed' => false,
        ];
        foreach ($parameters as $name => $value) {
            if (method_exists($this, "set" . ucfirst($name))) {
                $this->{"set" . ucfirst($name)}($value);
            }
        }
    }

    /**
     * @param string $data
     *
     * @return string
     */
    private function hash($data)
    {
        return static::ALGO . '$' . hash(static::ALGO, $data . $this->salt);
    }

    /**
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @param string $identity
     *
     * @return IdentityObject
     */
    public function setIdentity($identity)
    {
        $this->identity = $this->hash($identity);
        return $this;
    }

    /**
     * @return bool
     */
    public function isHashed()
    {
        return $this->hashed;
    }

    /**
     * @param bool $hashed
     *
     * @return IdentityObject
     */
    private function setHashed($hashed)
    {
        $this->hashed = $hashed;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param string $salt
     *
     * @return IdentityObject
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
        $this->setHashed(empty($salt) ? false : true);
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
     * @return IdentityObject
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
