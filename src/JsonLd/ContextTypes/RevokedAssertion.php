<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes\Assertion;

use JsonLd\ContextTypes\AbstractContext;

class RevokedAssertion extends AbstractContext
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
        'uid' => null,
        'revoked' => null,
        'revocationReason' => null,
    ];
}
