<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class System
 * @package Clearvox\Gigaset\UnifiedPhoneConfiguration
 */
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
     * @var Security
     */
    private $security;

    /**
     * @return DateAndTime
     */
    public function getDateAndTime()
    {
        if(!$this->dateAndTime) {
            $this->dateAndTime = new DateAndTime();
        }

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
        if(!$this->provision) {
            $this->provision = new Provision();
        }

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


    /**
     * @return Security
     */
    public function getSecurity()
    {
        if(!$this->security) {
            $this->security = new Security();
        }

        return $this->security;
    }

    /**
     * @param Security $security
     * @returns $this
     */
    public function setSecurity(Security $security)
    {
        $this->security = $security;
        return $this;
    }

    use ToArray;
}