<?php

namespace SixBySix\Float\Entity;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use SixBySix\Float\Exception;
use SixBySix\Float\FloatClient;

abstract class AbstractEntity
{
    /**
     * @var Serializer
     */
    protected static $serializer;

    public static function getAll(array $opts = [])
    {
        $opts = static::formatQueryOpts($opts);

        $response = FloatClient::get(static::getResourceName(), $opts);

        $collection = [];

        if (sizeof($response) === 0) {
            return $collection;
        }

        foreach ($response[static::getResourceName()] as $entityData) {
            $entity = static::deserialize($entityData);
            $collection[] = $entity;
        }

        return $collection;
    }

    public static function getById($id)
    {
        /** @var string $resource */
        $resource = sprintf("%s/%d", static::getResourceName(), $id);

        /** @var mixed $response */
        $response = FloatClient::get($resource);

        if (sizeof($response) == 0) {
            throw new Exception\EntityNotFoundException(
                sprintf("%s with ID %d does not exist", static::class, $id)
            );
        }

        /** @var AbstractEntity $entity */
        $entity = static::deserialize($response);

        return $entity;
    }

    public static function deserialize($data)
    {
        return static::getSerializer()->fromArray(
            $data,
            get_called_class(),
            DeserializationContext::create()->setGroups(['get'])
        );
    }

    protected static function formatQueryOpts(array $opts)
    {
        return $opts;
    }

    /**
     * @return mixed
     */
    protected static function getSerializer()
    {
        if (!self::$serializer) {
            self::$serializer = SerializerBuilder::create()->build();
        }

        return self::$serializer;
    }
}
