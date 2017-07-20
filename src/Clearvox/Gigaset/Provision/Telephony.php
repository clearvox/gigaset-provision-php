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
     * @var string
     */
    private $toneScheme;

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

    /**
     * @return string
     */
    public function getToneScheme()
    {
        return $this->toneScheme;
    }

    /**
     * @param string $toneScheme
     *
     * @return $this
     */
    public function setToneScheme($toneScheme)
    {
        $this->toneScheme = $toneScheme;

        return $this;
    }

    use ToArray;

}