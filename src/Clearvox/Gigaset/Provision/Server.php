<?php
namespace Clearvox\Gigaset\Provision;

class Server {

    private $address;

    private $port;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @returns $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     * @returns $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    public function __construct($address, $port)
    {
        $this->address = $address;
        $this->port = $port;
    }

    use ToArray;

}