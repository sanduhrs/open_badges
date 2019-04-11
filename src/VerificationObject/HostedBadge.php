<?php

namespace sanduhrs\OpenBadges\VerificationObject;

use sanduhrs\OpenBadges\VerificationObject;

/**
 * Class HostedBadge.
 *
 * @package sanduhrs\OpenBadges
 */
class HostedBadge extends VerificationObject
{

    /**
     * HostedBadge constructor.
     *
     * @param array $parameters
     */
    public function __construct($parameters = [])
    {
        $parameters += [
            "type" => "hosted",
        ];
        foreach ($parameters as $name => $value) {
            if (method_exists($this, "set" . ucfirst($name))) {
                $this->{"set" . ucfirst($name)}($value);
            }
        }
    }

}
