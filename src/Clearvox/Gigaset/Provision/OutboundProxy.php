<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class OutboundProxy
 * @package Clearvox\Gigaset\Provision
 */
class OutboundProxy
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
     * @var int
     */
    private $mode;

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

    /**
     * @param int $mode
     * @returns $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }



    use ToArray;

}