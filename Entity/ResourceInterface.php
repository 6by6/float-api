<?php

namespace SixBySix\Float\Entity;

interface ResourceInterface
{
    public function getId();
    public static function getResourceName();
    public static function getResourceEndpoint();
}
