<?php

namespace SixBySix\Float;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;

class FloatClient
{
    const BASE_URL = "https://api.float.com/api/v1/";

    /** @var  GuzzleClient */
    protected static $httpClient;

    /** @var string */
    protected static $apiKey;

    public static function getApiKey()
    {
        return self::$apiKey;
    }

    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }

    public static function get($resource, array $opts = [])
    {
        $opts = ['query' => $opts];
        $opts = static::prepareRequestOpts($opts);

        /** @var Response $response */
        $response = self::getHttpClient()->get($resource, $opts);

        $response = json_decode("{$response->getBody()}", $assoc = true);

        if (isset($response['count']) && $response['count'] == 0) {
            return [];
        }

        return $response;
    }

    public static function post($resource, array $body = [], array $opts = [])
    {
        $opts['form_params'] = $body;
        $opts = static::prepareRequestOpts($opts);

        /** @var ResponseInterface $response */
        $response = self::getHttpClient()->post($resource, $opts);

        /** @var string $body */
        $body = (string) $response->getBody();

        /** @var array $json */
        $json = json_decode($body, $assoc = true);

        return $json;
    }

    public static function put($resource, array $body = [], array $opts = [])
    {
        $opts['form_params'] = $body;
        $opts = static::prepareRequestOpts($opts);

        /** @var ResponseInterface $response */
        $response = self::getHttpClient()->put($resource, $opts);

        /** @var string $body */
        $body = (string) $response->getBody();

        /** @var array $json */
        $json = json_decode($body, $assoc = true);

        return $json;
    }

    public static function delete($resource)
    {
        /** @var array $opts */
        $opts = static::prepareRequestOpts([]);

        self::getHttpClient()->delete($resource, $opts);
    }

    protected static function prepareRequestOpts(array $opts = [])
    {
        $opts['headers'] = [
            'User-Agent' => 'Float API for PHP (daniel@sixbysix.co.uk)',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %s', self::getApiKey()),
        ];

        return $opts;
    }

    protected static function getHttpClient()
    {
        if (!self::$httpClient) {
            self::$httpClient = new GuzzleClient([
                'base_uri' => self::BASE_URL
            ]);
        }

        return self::$httpClient;
    }
}

