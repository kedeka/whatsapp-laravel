<?php
namespace Kedeka\Whatsapp;

use GuzzleHttp\Client as HttpClient;

class Client
{
    protected $device;
    protected $apiUrl;
    protected $apiKey;
    protected $client;

    public function __construct(array $config = [])
    {
        $this->config($config);
        $this->client = new HttpClient();
    }

    public function config(array $config)
    {
        $config = array_merge(config('whatsapp'), $config);

        $this->device = $config['device'];
        $this->apiUrl = $config['url'];
        $this->apiKey = $config['key'];


        return $this;
    }

    public function parseMessage(string|array $message): array
    {
        if (is_string($message)) {
            $message = [
                'text' => $message
            ];
        }

        return $message;
    }

    public function request(string $endpoint, array $params = [])
    {
        $endpoint = sprintf('%s/%s/%s', $this->apiUrl, $this->device, $endpoint);
        $endpoint = str_replace(':/', '://', preg_replace('/(\/+)/', '/', $endpoint));

        return $this->client->request('POST', $endpoint, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Accept' => 'application/json',
            ],
            'form_params' => $params,
        ]);
    }
}