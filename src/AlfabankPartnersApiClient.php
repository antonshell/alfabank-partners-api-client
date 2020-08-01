<?php

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class AlfabankPartnersApiClient
{
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';

    private $apiKey = '';

    private $baseUrl = 'https://partner.alfabank.ru/public-api/v2';

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getLeads()
    {
        $url = sprintf('%s/leads', $this->baseUrl);
        $response = $this->getClient()->request(self::METHOD_GET, $url, [
            'headers' => $this->getHeaders(),
        ]);

        return $response;
    }

    /**
     * @string $leadId
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getLeadById($leadId)
    {
        $url = sprintf('%s/leads/%s', $this->baseUrl, $leadId);
        $response = $this->getClient()->request(self::METHOD_GET, $url, [
            'headers' => $this->getHeaders(),
        ]);

        return $response;
    }

    /**
     * @param array $data
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function check(array $data)
    {
        $url = sprintf('%s/checks', $this->baseUrl);

        $response = $this->getClient()->request(self::METHOD_POST, $url, [
            'headers' => $this->getHeaders(),
            'body' => json_encode($data)
        ]);

        return $response;
    }

    /**
     * @param array $data
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createLead(array $data)
    {
        $url = sprintf('%s/leads', $this->baseUrl);

        $response = $this->getClient()->request(self::METHOD_POST, $url, [
            'headers' => $this->getHeaders(),
            'body' => json_encode($data)
        ]);

        return $response;
    }

    /**
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCitiesDictionary()
    {
        $url = sprintf('%s/dictionaries/{type}?code=cities', $this->baseUrl);
        $response = $this->getClient()->request(self::METHOD_GET, $url, [
            'headers' => $this->getHeaders(),
        ]);

        return $response;
    }

    /**
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getRegionsDictionary()
    {
        $url = sprintf('%s/dictionaries/{type}?code=regions', $this->baseUrl);
        $response = $this->getClient()->request(self::METHOD_GET, $url, [
            'headers' => $this->getHeaders(),
        ]);

        return $response;
    }

    /**
     * @return Client
     */
    private function getClient()
    {
        return new Client([
            'verify' => false
        ]);
    }

    /**
     * @return array
     */
    private function getHeaders()
    {
        return [
            'Content-Type' => 'application/json;charset=UTF-8',
            'API-key' => $this->apiKey
        ];
    }
}