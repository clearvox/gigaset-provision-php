<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class Ringtone
 * @package Clearvox\Gigaset\Provision
 */
class Ringtone
{
    /**
     * @var string
     */
    private $external = '/usr/share/audio/ringtones/06_Gigaset.wav';

    /**
     * @var string
     */
    private $headerExternal = '&lt;127.0.0.1&gt;;info=alert-external';

    /**
     * @var string
     */
    private $internal = '/usr/share/audio/ringtones/06_Gigaset.wav';

    /**
     * @var string
     */
    private $headerInternal = '&lt;127.0.0.1&gt;;info=alert-internal';

    /**
     * @var string
     */
    private $group = '/usr/share/audio/ringtones/06_Gigaset.wav';

    /**
     * @var string
     */
    private $headerGroup = '&lt;127.0.0.1&gt;;info=alert-group';

    /**
     * @var string
     */
    private $doorstation = '/usr/share/audio/ringtones/06_Gigaset.wav';

    /**
     * @var string
     */
    private $headerDoorstation = '&lt;127.0.0.1&gt;;info=alert-door';

    /**
     * @var string
     */
    private $headerOptional = '&lt;127.0.0.1&gt;;info=alert-door';

    /**
     * @param $external
     *
     * @return $this
     */
    public function setExternal($external)
    {
        $this->external = $external;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternal()
    {
        return $this->external;
    }

    /**
     * @param $headerExternal
     *
     * @return $this
     */
    public function setHeaderExternal($headerExternal)
    {
        $this->headerExternal = $headerExternal;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeaderExternal()
    {
        return $this->headerExternal;
    }

    /**
     * @param $internal
     *
     * @return $this
     */
    public function setInternal($internal)
    {
        $this->internal = $internal;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternal()
    {
        return $this->internal;
    }

    /**
     * @param $headerInternal
     *
     * @return $this
     */
    public function setHeaderInternal($headerInternal)
    {
        $this->headerInternal = $headerInternal;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeaderInternal()
    {
        return $this->headerInternal;
    }

    /**
     * @param $group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param $headerGroup
     *
     * @return $this
     */
    public function setHeaderGroup($headerGroup)
    {
        $this->headerGroup = $headerGroup;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeaderGroup()
    {
        return $this->headerGroup;
    }


    /**
     * @param $doorstation
     *
     * @return $this
     */
    public function setDoorstation($doorstation)
    {
        $this->doorstation = $doorstation;
        return $this;
    }

    /**
     * @return string
     */
    public function getDoorstation()
    {
        return $this->doorstation;
    }

    /**
     * @param $headerDoorstation
     *
     * @return $this
     */
    public function setHeaderDoorstation($headerDoorstation)
    {
        $this->headerDoorstation = $headerDoorstation;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeaderDoorstation()
    {
        return $this->headerDoorstation;
    }

    /**
     * @return string
     */
    public function getHeaderOptional() {
        return $this->headerOptional;
    }

    /**
     * @param $headerOptional
     *
     * @return string
     */
    public function setHeaderOptional($headerOptional)
    {
        $this->headerOptional = $headerOptional;
        return $this;
    }

    use ToArray;

}