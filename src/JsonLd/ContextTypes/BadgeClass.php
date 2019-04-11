<?php

namespace sanduhrs\OpenBadges\JsonLd\ContextTypes;

use InvalidArgumentException;
use JsonLd\ContextTypes\AbstractContext;
use JsonLd\ContextTypes\ImageObject;
use sanduhrs\OpenBadges\AlignmentObject;
use sanduhrs\OpenBadges\Criteria;
use sanduhrs\OpenBadges\Profile;
use sanduhrs\OpenBadges\Relation;

class BadgeClass extends AbstractContext
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
        'version' => null,
        'description' => null,
        'image' => ImageObject::class,
        'criteria' => Criteria::class,
        'issuer' => Profile::class,
        'alignment' => [],
        'tags' => [],
        'related' => [],
    ];

    /**
     * Set alignments.
     *
     * @param \sanduhrs\OpenBadges\JsonLd\ContextTypes\AlignmentObject[] $values
     * @return array
     * @throws \Exception
     */
    protected function setAlignmentAttribute($values)
    {
        if (is_array($values)) {
            foreach ($values as $key => $value) {
                if (!($value instanceof AlignmentObject)) {
                    $type = is_object($value) ? get_class($value) : gettype($value);
                    throw new InvalidArgumentException('Value must be of type sanduhrs\OpenBadges\AlignmentObject, given: ' . $type);
                }
                $values[$key] = $value;
            }
        }
        return $values;
    }

    /**
     * Set tags attributes.
     *
     * @param string[] $values
     * @return array
     * @throws \Exception
     */
    protected function setTagsAttribute($values)
    {
        if (is_array($values)) {
            foreach ($values as $key => $value) {
                if (!is_string($value)) {
                    $type = is_object($value) ? get_class($value) : gettype($value);
                    throw new InvalidArgumentException('Value must be of type string, given: ' . $type);
                }
                $values[$key] = $value;
            }
        }
        return $values;
    }

    /**
     * Set relations.
     *
     * @param \sanduhrs\OpenBadges\JsonLd\ContextTypes\Related[] $values
     * @return array
     * @throws \Exception
     */
    protected function setRelatedAttribute($values)
    {
        if (is_array($values)) {
            foreach ($values as $key => $value) {
                if (!($value instanceof Relation)) {
                    $type = is_object($value) ? get_class($value) : gettype($value);
                    throw new InvalidArgumentException('Value must be of type sanduhrs\OpenBadges\Relation, given: ' . $type);
                }
                $values[$key] = $value;
            }
        }
        return $values;
    }

    /**
     * Set criteria.
     *
     * @param \sanduhrs\OpenBadges\JsonLd\ContextTypes\Criteria[] $values
     * @return array
     * @throws \Exception
     */
    protected function setCriteriaAttribute($values)
    {
        if (is_array($values)) {
            foreach ($values as $key => $value) {
                if (!($value instanceof Criteria)) {
                    $type = is_object($value) ? get_class($value) : gettype($value);
                    throw new InvalidArgumentException('Value must be of type sanduhrs\OpenBadges\Criteria, given: ' . $type);
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
