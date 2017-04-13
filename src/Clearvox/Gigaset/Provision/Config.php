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
     * @var string
     */
    private $_macAddress;

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
     * Gigaset Maxwell 3 / Basic Provision Config constructor.
     *
     * @param $productID
     * @param $macAddress
     */
    public function __construct($productID, $macAddress)
    {
        if (strlen($macAddress) === 12) {
            $macAddress = trim(chunk_split($macAddress, 2, ':'), ':');
        }

        $this->_productID  = $productID;
        $this->_macAddress = strtolower($macAddress);
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
     * @return string
     */
    public function getMacAddress()
    {
        return $this->_macAddress;
    }

    /**
     * @param string $_macAddress
     * @returns $this
     */
    public function setMacAddress($_macAddress)
    {
        if (strlen($_macAddress) === 12) {
            $_macAddress = trim(chunk_split($_macAddress, 2, ':'), ':');
        }

        $this->_macAddress = strtolower($_macAddress);
        return $this;
    }

    /**
     * @return SIP
     */
    public function getSIP()
    {
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
        $output .= '<firmware></firmware>' . PHP_EOL;
        $output .= '<nvm>' . PHP_EOL;

        $iterator = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($this->toArray()));
        foreach ($iterator as $leafValue) {
            $keys = [];
            foreach (range(0, $iterator->getDepth()) as $depth) {
                $keys[] = $iterator->getSubIterator($depth)->key();
            }

            // convert booleans to 0 or 1
            if(is_bool($leafValue)) {
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