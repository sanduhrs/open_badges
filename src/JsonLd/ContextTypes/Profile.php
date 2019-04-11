<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes;

use JsonLd\ContextTypes\AbstractContext;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\CryptographicKey;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\VerificationObject;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\RevocationList;

class Profile extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        '@context' => 'https://w3id.org/openbadges/v2',
        'id' => null,
        'type' => null,
        'name' => null,
        'url' => null,
        'telephone' => null,
        'description' => null,
        'image' => null,
        'email' => null,
        'publicKey' => CryptographicKey::class,
        'verification' => VerificationObject::class,
        'revocationList' => RevocationList::class,
    ];

    /**
     * Profile constructor.
     *
     * @param array $parameters
     */
    public function __construct($parameters = [])
    {
        parent::__construct($parameters);
        $parameters += [];
        foreach ($parameters as $name => $value) {
            if (method_exists($this, "set" . ucfirst($name))) {
                $this->{"set" . ucfirst($name)}($value);
            }
        }
    }
}
