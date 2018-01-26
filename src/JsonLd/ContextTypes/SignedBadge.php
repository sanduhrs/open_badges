<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes\VerificationObject;

use sanduhrs\OpenBadges\JsonLd\ContextTypes\CryptographicKey;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\VerificationObject;

class SignedBadge extends VerificationObject
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        '@context' => 'https://w3id.org/openbadges/v2',
        'id' => null,
        'creator' => CryptographicKey::class,
    ];
}
