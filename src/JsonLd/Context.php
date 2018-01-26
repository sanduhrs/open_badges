<?php

namespace sanduhrs\OpenBadges\JsonLd;

use JsonLd\Context as JsonLdContext;

class Context extends JsonLdContext
{
    /**
     * Generate the JSON-LD array.
     *
     * @return array
     */
    public function generateArray()
    {
        return $this->getProperties();
    }
}
