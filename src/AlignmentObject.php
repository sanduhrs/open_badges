<?php

namespace sanduhrs\OpenBadges;

use sanduhrs\OpenBadges\JsonLd\Serializer;
use JsonSerializable;

/**
 * Class AlignmentObject.
 *
 * @package sanduhrs\OpenBadges
 */
class AlignmentObject implements JsonSerializable
{
    use Serializer;

    /**
     * Name of the alignment.
     *
     * @var string
     */
    protected $targetName;

    /**
     * A URL linking to the official description of the alignment target.
     *
     * For example an individual standard within an educational framework.
     *
     * @var string
     */
    protected $targetUrl;

    /**
     * Short description of the alignment target.
     *
     * @var string
     */
    protected $targetDescription;

    /**
     * Name of the framework the alignment target.
     *
     * @var string
     */
    protected $targetFramework;

    /**
     * A locally unique string identifier.
     *
     * If applicable, a locally unique string identifier that identifies the
     * alignment target within its framework and/or targetUrl.
     *
     * @var string
     */
    protected $targetCode;

    /**
     * AlignmentObject constructor.
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
    public function getTargetName()
    {
        return $this->targetName;
    }

    /**
     * @param string $targetName
     *
     * @return AlignmentObject
     */
    public function setTargetName($targetName)
    {
        $this->targetName = $targetName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }

    /**
     * @param string $targetUrl
     *
     * @return AlignmentObject
     */
    public function setTargetUrl($targetUrl)
    {
        $this->targetUrl = $targetUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetDescription()
    {
        return $this->targetDescription;
    }

    /**
     * @param string $targetDescription
     *
     * @return AlignmentObject
     */
    public function setTargetDescription($targetDescription)
    {
        $this->targetDescription = $targetDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetFramework()
    {
        return $this->targetFramework;
    }

    /**
     * @param string $targetFramework
     *
     * @return AlignmentObject
     */
    public function setTargetFramework($targetFramework)
    {
        $this->targetFramework = $targetFramework;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetCode()
    {
        return $this->targetCode;
    }

    /**
     * @param string $targetCode
     *
     * @return AlignmentObject
     */
    public function setTargetCode($targetCode)
    {
        $this->targetCode = $targetCode;
        return $this;
    }
}
