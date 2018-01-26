<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes;

use JsonLd\ContextTypes\AbstractContext;

class Endorsement extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        '@context' => 'https://w3id.org/openbadges/v2',
        'id' => null,
        'claim' => null,
        'issuer' => null,
        'issuedOn' => null,
        'verification' => VerificationObject::class,
    ];

    /**
     * Set claim.
     *
     * @param \sanduhrs\OpenBadges\JsonLd\ContextTypes\Assertion\RevokedAssertion[] $values
     * @return array
     * @throws \Exception
     */
    protected function setClaimAttribute($values)
    {
        if (is_array($values)) {
            foreach ($values as $key => $value) {
                $values[$key] = $value;
            }
        }
        return $values;
    }
}
