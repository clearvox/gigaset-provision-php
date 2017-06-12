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
    private $outCallsViaFunctionKey;

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
    public function getOutCallsViaFunctionKey()
    {
        return $this->outCallsViaFunctionKey;
    }

    /**
     * @param int $outCallsViaFunctionKey
     * @return $this
     */
    public function setOutCallsViaFunctionKey($outCallsViaFunctionKey)
    {
        $this->outCallsViaFunctionKey = $outCallsViaFunctionKey;
        return $this;
    }

    use ToArray;
}