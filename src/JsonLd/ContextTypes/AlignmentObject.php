<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes;

use JsonLd\ContextTypes\AbstractContext;

class AlignmentObject extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        '@context' => 'https://w3id.org/openbadges/v2',
        'targetName' => null,
        'targetUrl' => null,
        'targetDescription' => null,
        'targetFramework' => null,
        'targetCode' => null,
    ];
}
