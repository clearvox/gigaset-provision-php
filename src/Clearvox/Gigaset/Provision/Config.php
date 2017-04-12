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
    private $productID;

    /**
     * @var string
     */
    private $macAddress;

    /**
     * Basic sip configuration
     *
     * @var SIP
     */
    private $sip;

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

        $this->productID  = $productID;
        $this->macAddress = strtolower($macAddress);
    }

    /**
     * @return string
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @param string $productID
     * @returns $this
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * @return string
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }

    /**
     * @param string $macAddress
     * @returns $this
     */
    public function setMacAddress($macAddress)
    {
        if (strlen($macAddress) === 12) {
            $macAddress = trim(chunk_split($macAddress, 2, ':'), ':');
        }

        $this->macAddress = strtolower($macAddress);
        return $this;
    }

    /**
     * @return SIP
     */
    public function getSip()
    {
        return $this->sip;
    }

    /**
     * @param SIP $sip
     * @returns $this
     */
    public function setSip(SIP $sip)
    {
        $this->sip = $sip;
        return $this;
    }

    /**
     * Exports the provision data as array
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'SIP' => $this->sip->toArray(),
        ];
    }

    /**
     * Export the provision data as xml string
     *
     * @return string
     */
    public function toXML()
    {
        $output = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $output .= '<provisioning version="1.0" productID="' . $this->getProductID() . '">' . PHP_EOL;

        $output .= '<firmware></firmware>' . PHP_EOL;
        $output .= '<nvm>' . PHP_EOL;

        $ritit = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($this->toArray()));
        foreach ($ritit as $leafValue) {
            $keys = [];
            foreach (range(0, $ritit->getDepth()) as $depth) {
                $keys[] = $ritit->getSubIterator($depth)->key();
            }
            $output .= '<param name="' . join('.', $keys) . '" value="' . $leafValue . '" />' . PHP_EOL;
        }
        $output .= '<nvm>' . PHP_EOL;

        $output .= '<custom></custom>' . PHP_EOL;
        $output .= '</provisioning>';

        return $output;
    }

}