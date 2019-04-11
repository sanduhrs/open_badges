<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes;

use sanduhrs\OpenBadges\JsonLd\ContextTypes\VerificationObject;

class HostedBadge extends VerificationObject
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        '@context' => 'https://w3id.org/openbadges/v2',
        'type' => null,
        'id' => null,
    ];
}
