<?php
namespace Clearvox\Gigaset\Provision;

class FirmwareManagement
{
    /**
     * @var bool
     */
    private $automaticCheckForUpdates = false;

    /**
     * @return bool
     */
    public function isAutomaticCheckForUpdates()
    {
        return $this->automaticCheckForUpdates;
    }

    /**
     * @param bool $automaticCheckForUpdates
     *
     * @return $this
     */
    public function setAutomaticCheckForUpdates($automaticCheckForUpdates)
    {
        $this->automaticCheckForUpdates = $automaticCheckForUpdates;

        return $this;
    }

    /**
     * @param int $handsfreeVolume
     * @returns $this
     */
    public function setHandsfreeVolume($handsfreeVolume)
    {
        $this->handsfreeVolume = $handsfreeVolume;
        return $this;
    }

    use ToArray;
}