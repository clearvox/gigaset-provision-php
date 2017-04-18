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

    use ToArray;

}