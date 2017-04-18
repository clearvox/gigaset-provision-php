<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class QuickDialKey
 * @package Clearvox\Gigaset\Provision
 */
class QuickDialKey {

    /**
     * @var int
     */
    private $type;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $FAC;

    /**
     * @var string
     */
    private $actionURL;

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @returns $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @returns $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getFAC()
    {
        return $this->FAC;
    }

    /**
     * @param string $FAC
     * @returns $this
     */
    public function setFAC($FAC)
    {
        $this->FAC = $FAC;
        return $this;
    }

    /**
     * @return string
     */
    public function getActionURL()
    {
        return $this->actionURL;
    }

    /**
     * @param string $actionURL
     * @returns $this
     */
    public function setActionURL($actionURL)
    {
        $this->actionURL = $actionURL;
        return $this;
    }

    use ToArray;
}