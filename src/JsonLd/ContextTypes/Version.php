<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes;

use JsonLd\ContextTypes\AbstractContext;
use JsonLd\ContextTypes\ImageObject;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\Criteria;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\Endorsement;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\Profile;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\Relation;

class Version extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        '@context' => 'https://w3id.org/openbadges/v2',
        'related' => Relation::class,
        'version' => null,
        'endorsement' => Endorsement::class,
    ];
}
