<?php

namespace sanduhrs\OpenBadges\JsonLd;

use Exception;
use ReflectionClass;

trait Serializer
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function jsonSerialize()
    {
        $class = new ReflectionClass($this);
        $parts = explode('\\', $class->getShortName());
        $name = array_pop($parts);

        if (!class_exists("sanduhrs\OpenBadges\JsonLd\ContextTypes\\$name")) {
            throw new Exception('Context type class is not defined.');
        }

        $context = Context::create(
            "sanduhrs\OpenBadges\JsonLd\ContextTypes\\$name",
            get_object_vars($this)
        );
        return $context->generateArray();
    }
}
