<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes;

use InvalidArgumentException;
use JsonLd\ContextTypes\AbstractContext;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\Profile;
use sanduhrs\OpenBadges\JsonLd\ContextTypes\Assertion\RevokedAssertion;

class RevocationList extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        '@context' => 'https://w3id.org/openbadges/v2',
        'id' => null,
        'issuer' => Profile::class,
        'revokedAssertions' => [],
    ];

    /**
     * Set revoked assertions.
     *
     * @param \sanduhrs\OpenBadges\JsonLd\ContextTypes\Assertion\RevokedAssertion[] $values
     * @return array
     * @throws \Exception
     */
    protected function setAlignmentAttribute($values)
    {
        if (is_array($values)) {
            foreach ($values as $key => $value) {
                if (!($value instanceof RevokedAssertion)) {
                    $type = is_object($value) ? get_class($value) : gettype($value);
                    throw new InvalidArgumentException('Value must be of type sanduhrs\OpenBadges\JsonLd\ContextTypes\Assertion\Assertion, given: ' . $type);
                }
                $values[$key] = $value;
            }
        }
        return $values;
    }
}
