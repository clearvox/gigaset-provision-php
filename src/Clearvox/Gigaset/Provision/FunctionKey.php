<?php
namespace Clearvox\Gigaset\Provision;

class FunctionKey {

    /**
     * @var int
     */
    private $type;

    /**
     * @var string
     */
    private $displayName;

    /**
     * SIP Account
     *
     * @var int
     */
    private $connection;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $callPickupCode;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $callDivertType;

    /**
     * @var string
     */
    private $enableCode;

    /**
     * @var string
     */
    private $disableCode;

    /**
     * @var int
     */
    private $DTMFCode;

    /**
     * @var string
     */
    private $action;

    /**
     * @var int
     */
    private $color;

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @returns $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @returns $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return int
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param int $connection
     * @returns $this
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @returns $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallPickupCode()
    {
        return $this->callPickupCode;
    }

    /**
     * @param string $callPickupCode
     * @returns $this
     */
    public function setCallPickupCode($callPickupCode)
    {
        $this->callPickupCode = $callPickupCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @returns $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallDivertType()
    {
        return $this->callDivertType;
    }

    /**
     * @param string $callDivertType
     * @returns $this
     */
    public function setCallDivertType($callDivertType)
    {
        $this->callDivertType = $callDivertType;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnableCode()
    {
        return $this->enableCode;
    }

    /**
     * @param string $enableCode
     * @returns $this
     */
    public function setEnableCode($enableCode)
    {
        $this->enableCode = $enableCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisableCode()
    {
        return $this->disableCode;
    }

    /**
     * @param string $disableCode
     * @returns $this
     */
    public function setDisableCode($disableCode)
    {
        $this->disableCode = $disableCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getDTMFCode()
    {
        return $this->DTMFCode;
    }

    /**
     * @param int $DTMFCode
     * @returns $this
     */
    public function setDTMFCode($DTMFCode)
    {
        $this->DTMFCode = $DTMFCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @returns $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return int
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param int $color
     * @returns $this
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    use ToArray;
}