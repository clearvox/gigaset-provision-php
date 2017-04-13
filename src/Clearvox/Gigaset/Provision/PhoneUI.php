<?php
namespace Clearvox\Gigaset\Provision;

class PhoneUI {

    /**
     * @var Settings
     */
    private $settings;

    /**
     * @return Settings
     */
    public function getSettings()
    {
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

    use ToArray;

}