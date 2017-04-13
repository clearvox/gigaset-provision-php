<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class Server
 * @package Clearvox\Gigaset\Provision
 */
class Server
{
    /**
     * @var string
     */
    private $address;

    /**
     * @var int
     */
    private $port;

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @returns $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param int $port
     * @returns $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    use ToArray;

}