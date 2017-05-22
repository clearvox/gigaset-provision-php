<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class Speechpath
 * @package Clearvox\Gigaset\Provision
 */
class Speechpath
{
    /**
     * @var int
     */
    private $callsViaCallManager;

    /**
     * @var int
     */
    private $incCallsWithoutCallManager;

    /**
     * @var int
     */
    private $outCallsViaFunctionKeys;

    /**
     * @return int
     */
    public function getCallsViaCallManager()
    {
        return $this->callsViaCallManager;
    }

    /**
     * @param $callsViaCallManager
     * @return $this
     */
    public function setCallsViaCallManager($callsViaCallManager)
    {
        $this->callsViaCallManager = $callsViaCallManager;
        return $this;
    }

    /**
     * @return int
     */
    public function getIncCallsWithoutCallManager()
    {
        return $this->incCallsWithoutCallManager;
    }

    /**
     * @param $incCallsWithoutCallManager
     * @return $this
     */
    public function setIncCallsWithoutCallManager($incCallsWithoutCallManager)
    {
        $this->incCallsWithoutCallManager = $incCallsWithoutCallManager;
        return $this;
    }

    /**
     * @return int
     */
    public function getOutCallsViaFunctionKeys()
    {
        return $this->outCallsViaFunctionKeys;
    }

    /**
     * @param int $outCallsViaFunctionKeys
     */
    public function setOutCallsViaFunctionKeys($outCallsViaFunctionKeys)
    {
        $this->outCallsViaFunctionKeys = $outCallsViaFunctionKeys;
    }

    use ToArray;
}