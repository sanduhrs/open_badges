<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes;

use JsonLd\ContextTypes\AbstractContext;

class VerificationObject extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        '@context' => 'https://w3id.org/openbadges/v2',
        'type' => null,
        'verificationProperty' => 'id',
        'startsWith' => null,
        'allowedOrigins' => null,
    ];
}
