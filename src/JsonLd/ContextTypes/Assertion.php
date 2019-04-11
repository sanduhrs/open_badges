<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes;

use InvalidArgumentException;
use JsonLd\ContextTypes\AbstractContext;
use JsonLd\ContextTypes\ImageObject;
use sanduhrs\OpenBadges\Evidence;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\BadgeClass;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\IdentityObject;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\VerificationObject;

class Assertion extends AbstractContext
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
        'recipient' => IdentityObject::class,
        'badge' => BadgeClass::class,
        'verification' => VerificationObject::class,
        'issuedOn' => null,
        'image' => ImageObject::class,
        'evidence' => [],
        'narrative' => null,
        'expires' => null,
        'revoked' => null,
        'revocationReason' => null,
        'uid' => null,
    ];

    /**
     * Set evidence.
     *
     * @param \sanduhrs\OpenBadges\JsonLd\ContextTypes\Evidence[] $values
     * @return array
     * @throws \Exception
     */
    protected function setEvidenceAttribute($values)
    {
        if (is_array($values)) {
            foreach ($values as $key => $value) {
                if (!($value instanceof Evidence)) {
                    $type = is_object($value) ? get_class($value) : gettype($value);
                    throw new InvalidArgumentException('Value must be of type sanduhrs\OpenBadges\Evidence, given: ' . $type);
                }

                if (count($values) === 1) {
                    return $value;
                } else {
                    $values[$key] = $value;
                }
            }
        }
        return $values;
    }
}
