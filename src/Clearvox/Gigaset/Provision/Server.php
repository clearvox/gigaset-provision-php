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
     * @var int
     */
    private $refreshTimer;

    /**
     * @var int
     */
    private $refreshTimerFailed;

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
     * @param int $refreshTimer
     * @returns $this
     */
    public function setRefreshTimer($refreshTimer)
    {
        $this->refreshTimer = $refreshTimer;
        return $this;
    }

    /**
     * @return int
     */
    public function getRefreshTimer()
    {
        return $this->refreshTimer;
    }

    /**
     * @return int
     */
    public function getRefreshTimerFailed()
    {
        return $this->refreshTimerFailed;
    }

    /**
     * @param int $refreshTimerFailed
     * @returns $this
     */
    public function setRefreshTimerFailed($refreshTimerFailed)
    {
        $this->refreshTimerFailed = $refreshTimerFailed;
        return $this;
    }

    use ToArray;
}