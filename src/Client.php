<?php
namespace Horde\Service\CiscoIot;

class Client
{

    /**
     * @var \Horde_Http_Client
     */
    protected $http;

    /**
     * @var string
     */
    protected $url;

    public function __construct(\Horde_Http_Client $http, string $serviceUrl = '')
    {
        $this->http = $http;
        $this->url = $serviceUrl;
    }

    public function setServiceUrl(string $serviceUrl)
    {
        $this->url = $serviceUrl;
    }
}