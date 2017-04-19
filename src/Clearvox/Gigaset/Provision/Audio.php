<?php
namespace Clearvox\Gigaset\Provision;

class Audio
{
    /**
     * @var int
     */
    private $receiverVolume;

    /**
     * @var int
     */
    private $headsetVolume;

    /**
     * @var int
     */
    private $handsfreeVolume;

    /**
     * @return int
     */
    public function getReceiverVolume()
    {
        return $this->receiverVolume;
    }

    /**
     * @param int $receiverVolume
     * @returns $this
     */
    public function setReceiverVolume($receiverVolume)
    {
        $this->receiverVolume = $receiverVolume;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeadsetVolume()
    {
        return $this->headsetVolume;
    }

    /**
     * @param int $headsetVolume
     * @returns $this
     */
    public function setHeadsetVolume($headsetVolume)
    {
        $this->headsetVolume = $headsetVolume;
        return $this;
    }

    /**
     * @return int
     */
    public function getHandsfreeVolume()
    {
        return $this->handsfreeVolume;
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