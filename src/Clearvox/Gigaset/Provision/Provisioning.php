<?php
namespace Clearvox\Gigaset\Provision;

class Provisioning {

    /**
     * @var bool
     */
    private $showInProgressOnDisplay;

    /**
     * @return boolean
     */
    public function isShowInProgressOnDisplay()
    {
        return $this->showInProgressOnDisplay;
    }

    /**
     * @param boolean $showInProgressOnDisplay
     * @returns $this
     */
    public function setShowInProgressOnDisplay($showInProgressOnDisplay)
    {
        $this->showInProgressOnDisplay = $showInProgressOnDisplay;
        return $this;
    }


    use ToArray;
}