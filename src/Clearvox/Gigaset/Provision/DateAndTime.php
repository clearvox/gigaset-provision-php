<?php
namespace Clearvox\Gigaset\Provision;

class DateAndTime {

    /**
     * @var string
     */
    private $timeZone;

    /**
     * @var string
     */
    private $autoAdjustTime;

    /**
     * @var string
     */
    private $autoAdjustClockForDST;

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param string $timeZone
     * @returns $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutoAdjustTime()
    {
        return $this->autoAdjustTime;
    }

    /**
     * @param string $autoAdjustTime
     * @returns $this
     */
    public function setAutoAdjustTime($autoAdjustTime)
    {
        $this->autoAdjustTime = $autoAdjustTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutoAdjustClockForDST()
    {
        return $this->autoAdjustClockForDST;
    }

    /**
     * @param string $autoAdjustClockForDST
     * @returns $this
     */
    public function setAutoAdjustClockForDST($autoAdjustClockForDST)
    {
        $this->autoAdjustClockForDST = $autoAdjustClockForDST;
        return $this;
    }

    use ToArray;
}