<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes;

use JsonLd\ContextTypes\AbstractContext;

class IdentityObject extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        '@context' => 'https://w3id.org/openbadges/v2',
        'identity' => null,
        // Type may be one of email, url, telephone.
        // @see https://www.imsglobal.org/sites/default/files/Badges/OBv2p0/index.html#profile-identifier-properties
        'hashed' => null,
        'salt' => null,
    ];
}
