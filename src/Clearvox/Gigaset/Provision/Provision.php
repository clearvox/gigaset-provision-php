<?php
namespace Clearvox\Gigaset\Provision;

class Provision {

    /**
     * @var string
     */
    private $provisioningServer;

    /**
     * @var int
     */
    private $period;

    /**
     * @return string
     */
    public function getProvisioningServer()
    {
        return $this->provisioningServer;
    }

    /**
     * @param string $provisioningServer
     * @returns $this
     */
    public function setProvisioningServer($provisioningServer)
    {
        $this->provisioningServer = $provisioningServer;
        return $this;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param int $period
     * @returns $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    use ToArray;
}