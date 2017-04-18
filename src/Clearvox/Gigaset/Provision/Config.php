<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Gigaset Maxwell 3 / Basic Provision Config Builder
 *
 * Class Config
 * @package Clearvox\Gigaset\Provision
 */
class Config
{
    /**
     * @var string
     */
    private $_productID;

    /**
     * @var Firmware
     */
    private $_firmware;

    /**
     * Basic sip configuration
     *
     * @var SIP
     */
    private $SIP;

    /**
     * System configuration
     *
     * @var System
     */
    private $system;

    /**
     * @var PhoneUI
     */
    private $phoneUI;

    /**
     * @var NetDir
     */
    private $netDir;

    /**
     * Gigaset Maxwell 3 / Basic Provision Config constructor.
     *
     * @param $productID
     */
    public function __construct($productID)
    {
        $this->_productID = $productID;
    }

    /**
     * @return string
     */
    public function getProductID()
    {
        return $this->_productID;
    }

    /**
     * @param string $_productID
     * @returns $this
     */
    public function setProductID($_productID)
    {
        $this->_productID = $_productID;
        return $this;
    }

    /**
     * @return Firmware
     */
    public function getFirmware()
    {
        return $this->_firmware;
    }

    /**
     * @param Firmware $firmware
     * @returns $this
     */
    public function setFirmware(Firmware $firmware)
    {
        $this->_firmware = $firmware;
        return $this;
    }

    /**
     * @return SIP
     */
    public function getSIP()
    {
        if (!$this->SIP) {
            $this->SIP = new SIP();
        }

        return $this->SIP;
    }

    /**
     * @param SIP $SIP
     * @returns $this
     */
    public function setSIP(SIP $SIP)
    {
        $this->SIP = $SIP;
        return $this;
    }

    /**
     * @return System
     */
    public function getSystem()
    {
        if (!$this->system) {
            $this->system = new System();
        }

        return $this->system;
    }

    /**
     * @param System $system
     * @returns $this
     */
    public function setSystem($system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * @return PhoneUI
     */
    public function getPhoneUI()
    {
        if (!$this->phoneUI) {
            $this->phoneUI = new PhoneUI();
        }

        return $this->phoneUI;
    }

    /**
     * @param PhoneUI $phoneUI
     * @returns $this
     */
    public function setPhoneUI($phoneUI)
    {
        $this->phoneUI = $phoneUI;
        return $this;
    }

    /**
     * @return NetDir
     */
    public function getNetDir()
    {
        if (!$this->netDir) {
            $this->netDir = new NetDir();
        }
        return $this->netDir;
    }

    /**
     * @param NetDir $netDir
     * @returns $this
     */
    public function setNetDir($netDir)
    {
        $this->netDir = $netDir;
        return $this;
    }

    use ToArray;

    /**
     * Export the provision data as xml string
     *
     * @return string
     */
    public function toXML()
    {
        $output = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $output .= '<provisioning version="1.1" productID="' . $this->getProductID() . '">' . PHP_EOL;

        // @todo[feature]: add firmware definition (url)
        $output .= '<firmware>' . PHP_EOL;

        if($this->getFirmware()) {
            $output .= '<file version="' . $this->getFirmware()->getVersion() . '" url="' . $this->getFirmware()->getUrl() . '"/>' . PHP_EOL;
        }

        $output .= '</firmware>' . PHP_EOL;
        $output .= '<nvm>' . PHP_EOL;

        $iterator = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($this->toArray()));
        foreach ($iterator as $leafValue) {
            $keys = [];
            foreach (range(0, $iterator->getDepth()) as $depth) {
                $keys[] = $iterator->getSubIterator($depth)->key();
            }

            // convert booleans to 0 or 1
            if (is_bool($leafValue)) {
                $leafValue = $leafValue ? '1' : '0';
            }

            $output .= '<param name="' . join('.', $keys) . '" value="' . $leafValue . '" />' . PHP_EOL;
        }
        $output .= '</nvm>' . PHP_EOL;

        $output .= '<custom></custom>' . PHP_EOL;
        $output .= '</provisioning>';

        return $output;
    }

}