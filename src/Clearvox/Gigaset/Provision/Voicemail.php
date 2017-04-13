<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class Voicemail
 * @package Clearvox\Gigaset\Provision
 */
class Voicemail
{
    /**
     * @var bool
     */
    private $active = false;

    /**
     * @var string
     */
    private $mailBox = '';

    /**
     * Voicemail constructor.
     *
     * @param bool $active
     * @param string $mailBox
     */
    public function __construct($active, $mailBox)
    {
        $this->active  = $active;
        $this->mailBox = $mailBox;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     * @returns $this
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailBox()
    {
        return $this->mailBox;
    }

    /**
     * @param string $mailBox
     * @returns $this
     */
    public function setMailBox($mailBox)
    {
        $this->mailBox = $mailBox;
        return $this;
    }

    use ToArray;

}