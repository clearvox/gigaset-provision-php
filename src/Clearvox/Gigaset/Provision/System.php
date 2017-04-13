<?php
namespace Clearvox\Gigaset\Provision;

class System
{
    /**
     * @var DateAndTime
     */
    private $dateAndTime;

    /**
     * @var Provision
     */
    private $provision;

    /**
     * @return DateAndTime
     */
    public function getDateAndTime()
    {
        return $this->dateAndTime;
    }

    /**
     * @param DateAndTime $dateAndTime
     * @returns $this
     */
    public function setDateAndTime(DateAndTime $dateAndTime)
    {
        $this->dateAndTime = $dateAndTime;
        return $this;
    }

    /**
     * @return Provision
     */
    public function getProvision()
    {
        return $this->provision;
    }

    /**
     * @param Provision $provision
     * @returns $this
     */
    public function setProvision(Provision $provision)
    {
        $this->provision = $provision;
        return $this;
    }

    use ToArray;
}