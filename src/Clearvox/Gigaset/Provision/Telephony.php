<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class Telephony
 * @package Clearvox\Gigaset\Provision
 */
class Telephony {

    /**
     * @var Speechpath
     */
    private $speechpath;

    /**
     * @return Speechpath
     */
    public function getSpeechpath()
    {
        if(!$this->speechpath) {
            $this->speechpath = new Speechpath();
        }
        return $this->speechpath;
    }

    /**
     * @param Speechpath $speechpath
     * @returns $this
     */
    public function setSpeechpath($speechpath)
    {
        $this->speechpath = $speechpath;
        return $this;
    }

    use ToArray;

}