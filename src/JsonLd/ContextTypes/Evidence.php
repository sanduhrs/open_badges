<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes;

use JsonLd\ContextTypes\AbstractContext;
use JsonLd\ContextTypes\ImageObject;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\Criteria;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\Profile;

class Evidence extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        '@context' => 'https://w3id.org/openbadges/v2',
        'id' => null,
        'narrative' => null,
        'name' => null,
        'description' => null,
        'genre' => null,
        'audience' => null,
    ];
}
