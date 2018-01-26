<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes;

use JsonLd\ContextTypes\AbstractContext;
use sanduhrs\OpenBadges\Profile;

class CryptographicKey extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        '@context' => 'https://w3id.org/openbadges/v2',
        'id' => null,
        'owner' => Profile::class,
        'publicKeyPem' => null,
    ];
}
