<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\SerializationContext;
use SixBySix\Float\FloatClient;

abstract class AbstractResourceEntity extends AbstractEntity
{
    public function save()
    {
        if ((int) $this->getId()) {
            // update existing instance
            $payload = $this->serialize(['update']);
            $method = 'put';
            $uri = sprintf("%s/%d", static::getResourceEndpoint(), $this->getId());
        } else {
            // create a new instance
            $payload = $this->serialize(['post']);
            $method = 'post';
            $uri = static::getResourceEndpoint();
        }

        $response = FloatClient::$method($uri, $payload);

        if (isset($response[static::getIdKey()])) {
            /** @var string $prop */
            $prop = $this->getIdProp();

            $this->$prop = (int) $response[static::getIdKey()];
        }

        return $this;
    }

    public function delete()
    {
        if (!$this->getId()) {
            return;
        }

        $uri = sprintf("%s/%d", static::getResourceEndpoint(), $this->getId());

        FloatClient::delete($uri);
    }

    protected function serialize(array $groups = [])
    {
        return $this->getSerializer()->toArray(
            $this,
            SerializationContext::create()->setGroups($groups)
        );
    }

    abstract public function getId();
    abstract public static function getIdKey();
    abstract public static function getIdProp();
    abstract public static function getResourceName();
    abstract public static function getResourceEndpoint();
}
