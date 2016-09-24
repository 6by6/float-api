<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\SerializationContext;
use SixBySix\Float\FloatClient;

abstract class AbstractResourceEntity extends AbstractEntity
{
    public function save()
    {
        if ($this->getId()) {
            // update existing instance
            $payload = $this->serialize(['update']);
            $method = 'put';
        } else {
            // create a new instance
            $payload = $this->serialize(['post']);
            $method = 'post';
        }

        FloatClient::$method(static::getResourceEndpoint(), $payload);
    }

    protected function serialize(array $groups = [])
    {
        return $this->getSerializer()->toArray(
            $this,
            SerializationContext::create()->setGroups($groups)
        );
    }

    abstract public static function getResourceName();
    abstract public static function getResourceEndpoint();
}
