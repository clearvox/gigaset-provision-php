<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class Settings
 * @package Clearvox\Gigaset\Provision
 */
class Settings
{
    /**
     * @var string
     */
    private $language = 'en-us';

    /**
     * @var int
     */
    private $screenSaverTimeout = 20;

    /**
     * @var ColorScheme
     */
    private $colorScheme = null;

    /**
     * @var int
     */
    private $backlight = 7;

    /**
     * @var int
     */
    private $contrast = 5;

    /**
     * @var int
     */
    private $ScreenSaverSelection = 0;

    /**
     * @var string
     */
    private $screenSaverHTTPSource;

    /**
     * @var int
     */
    private $volume;

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @returns $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return int
     */
    public function getScreenSaverTimeout()
    {
        return $this->screenSaverTimeout;
    }

    /**
     * @param int $screenSaverTimeout
     * @returns $this
     */
    public function setScreenSaverTimeout($screenSaverTimeout)
    {
        $this->screenSaverTimeout = $screenSaverTimeout;
        return $this;
    }

    /**
     * @return ColorScheme
     */
    public function getColorScheme()
    {
        if (!$this->colorScheme) {
            $this->colorScheme = new ColorScheme();
        }

        return $this->colorScheme;
    }

    /**
     * @param ColorScheme $colorScheme
     * @returns $this
     */
    public function setColorScheme(ColorScheme $colorScheme)
    {
        $this->colorScheme = $colorScheme;
        return $this;
    }

    /**
     * @return int
     */
    public function getBacklight()
    {
        return $this->backlight;
    }

    /**
     * @param int $backlight
     * @returns $this
     */
    public function setBacklight($backlight)
    {
        $this->backlight = $backlight;
        return $this;
    }

    /**
     * @return int
     */
    public function getContrast()
    {
        return $this->contrast;
    }

    /**
     * @param int $contrast
     * @returns $this
     */
    public function setContrast($contrast)
    {
        $this->contrast = $contrast;
        return $this;
    }

    /**
     * @return int
     */
    public function getScreenSaverSelection()
    {
        return $this->ScreenSaverSelection;
    }

    /**
     * @param int $ScreenSaverSelection
     * @returns $this
     */
    public function setScreenSaverSelection($ScreenSaverSelection)
    {
        $this->ScreenSaverSelection = $ScreenSaverSelection;
        return $this;
    }

    /**
     * @return string
     */
    public function getScreenSaverHTTPSource()
    {
        return $this->screenSaverHTTPSource;
    }

    /**
     * @param string $screenSaverHTTPSource
     * @returns $this
     */
    public function setScreenSaverHTTPSource($screenSaverHTTPSource)
    {
        $this->screenSaverHTTPSource = $screenSaverHTTPSource;
        return $this;
    }

    /**
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param int $volume
     * @returns $this
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

    use ToArray;
}