<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class Firmware
 * @package Clearvox\Gigaset\Provision
 */
class Firmware {

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $url;

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    public function __construct($version, $url)
    {
        $this->version = $version;
        $this->url = $url;
    }

}