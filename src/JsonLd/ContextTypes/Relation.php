<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes;

use JsonLd\ContextTypes\AbstractContext;
use JsonLd\ContextTypes\ImageObject;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\BadgeClass;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\Evidence;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\IdentityObject;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\VerificationObject;

class Relation extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        '@context' => 'https://w3id.org/openbadges/v2',
        'id' => null,
        'version' => null,
    ];
}
