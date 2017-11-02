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
    private $mailbox = '';

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
        return $this->mailbox;
    }

    /**
     * @param string $mailbox
     * @returns $this
     */
    public function setMailBox($mailbox)
    {
        $this->mailbox = $mailbox;
        return $this;
    }

    use ToArray;

}