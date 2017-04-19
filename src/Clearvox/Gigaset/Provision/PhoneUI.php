<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class PhoneUI
 * @package Clearvox\Gigaset\Provision
 */
class PhoneUI
{
    /**
     * @var Settings
     */
    private $settings;

    /**
     * @var Keys
     */
    private $keys;

    /**
     * @var Audio
     */
    private $audio;

    /**
     * @var Provisioning
     */
    private $provisioning;

    /**
     * @return Settings
     */
    public function getSettings()
    {
        if (!$this->settings) {
            $this->settings = new Settings();
        }

        return $this->settings;
    }

    /**
     * @param Settings $settings
     * @returns $this
     */
    public function setSettings(Settings $settings)
    {
        $this->settings = $settings;
        return $this;
    }

    /**
     * @return Keys
     */
    public function getKeys()
    {
        if (!$this->keys) {
            $this->keys = new Keys();
        }

        return $this->keys;
    }

    /**
     * @param Keys $keys
     * @returns $this
     */
    public function setKeys($keys)
    {
        $this->keys = $keys;
        return $this;
    }

    /**
     * @return Audio
     */
    public function getAudio()
    {
        if(!$this->audio) {
            $this->audio = new Audio();
        }

        return $this->audio;
    }

    /**
     * @param Audio $audio
     * @returns $this
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;
        return $this;
    }

    /**
     * @return Provisioning
     */
    public function getProvisioning()
    {
        if(!$this->provisioning) {
            $this->provisioning = new Provisioning();
        }

        return $this->provisioning;
    }

    /**
     * @param Provisioning $provisioning
     * @returns $this
     */
    public function setProvisioning($provisioning)
    {
        $this->provisioning = $provisioning;
        return $this;
    }


    use ToArray;

}