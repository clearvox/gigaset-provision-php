<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class Account
 * @package Clearvox\Gigaset\Provision
 */
class Account
{
    /**
     * @var string
     */
    private $accountName = '';

    /**
     * @var bool
     */
    private $active = false;

    /**
     * @var string
     */
    private $provider = 'Provider';

    /**
     * @var string
     */
    private $authName = '';

    /**
     * @var string
     */
    private $authPassword = '';

    /**
     * @var string
     */
    private $displayName = '';

    /**
     * @var string
     */
    private $userName = '';

    /**
     * @var string
     */
    private $domain = '';

    /**
     * @var string
     */
    private $callWaiting = '';

    /**
     * @var Server
     */
    private $proxyServer = null;

    /**
     * @var Server
     */
    private $registrationServer = null;

    /**
     * @var OutboundProxy
     */
    private $outboundProxy = null;

    /**
     * @var int
     */
    private $CLIPSource = 2;

    /**
     * @var int
     */
    private $DTMFTransmission = 4;

    /**
     * @var Voicemail
     */
    private $voiceMail = null;

    /**
     * @var bool
     */
    private $countMissedAcceptedCalls = false;

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     * @returns $this
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     * @returns $this
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param string $provider
     * @returns $this
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthName()
    {
        return $this->authName;
    }

    /**
     * @param string $authName
     * @returns $this
     */
    public function setAuthName($authName)
    {
        $this->authName = $authName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->authPassword;
    }

    /**
     * @param string $authPassword
     * @returns $this
     */
    public function setAuthPassword($authPassword)
    {
        $this->authPassword = $authPassword;
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
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @returns $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @returns $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallWaiting()
    {
        return $this->callWaiting;
    }

    /**
     * @param string $callWaiting
     * @returns $this
     */
    public function setCallWaiting($callWaiting)
    {
        $this->callWaiting = $callWaiting;
        return $this;
    }

    /**
     * @return Server
     */
    public function getProxyServer()
    {
        if(!$this->proxyServer) {
            $this->proxyServer = new Server();
        }

        return $this->proxyServer;
    }

    /**
     * @param Server $proxyServer
     * @returns $this
     */
    public function setProxyServer(Server $proxyServer)
    {
        $this->proxyServer = $proxyServer;
        return $this;
    }

    /**
     * @return Server
     */
    public function getRegistrationServer()
    {
        if(!$this->registrationServer) {
            $this->registrationServer = new Server();
        }

        return $this->registrationServer;
    }

    /**
     * @param Server $registrationServer
     * @returns $this
     */
    public function setRegistrationServer(Server $registrationServer)
    {
        $this->registrationServer = $registrationServer;
        return $this;
    }

    /**
     * @return OutboundProxy
     */
    public function getOutboundProxy()
    {
        if(!$this->outboundProxy) {
            $this->outboundProxy = new OutboundProxy();
        }

        return $this->outboundProxy;
    }

    /**
     * @param OutboundProxy $outboundProxy
     * @returns $this
     */
    public function setOutboundProxy(OutboundProxy $outboundProxy)
    {
        $this->outboundProxy = $outboundProxy;
        return $this;
    }

    /**
     * @return int
     */
    public function getCLIPSource()
    {
        return $this->CLIPSource;
    }

    /**
     * @param int $CLIPSource
     * @returns $this
     */
    public function setCLIPSource($CLIPSource)
    {
        $this->CLIPSource = $CLIPSource;
        return $this;
    }

    /**
     * @return int
     */
    public function getDTMFTransmission()
    {
        return $this->DTMFTransmission;
    }

    /**
     * @param int $DTMFTransmission
     * @returns $this
     */
    public function setDTMFTransmission($DTMFTransmission)
    {
        $this->DTMFTransmission = $DTMFTransmission;
        return $this;
    }

    /**
     * @return Voicemail
     */
    public function getVoiceMail()
    {
        if(!$this->voiceMail) {
            $this->voiceMail = new Voicemail();
        }

        return $this->voiceMail;
    }

    /**
     * @param Voicemail $voiceMail
     * @returns $this
     */
    public function setVoiceMail(Voicemail $voiceMail)
    {
        $this->voiceMail = $voiceMail;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCountMissedAcceptedCalls()
    {
        return $this->countMissedAcceptedCalls;
    }

    /**
     * @param boolean $countMissedAcceptedCalls
     * @returns $this
     */
    public function setCountMissedAcceptedCalls($countMissedAcceptedCalls)
    {
        $this->countMissedAcceptedCalls = $countMissedAcceptedCalls;
        return $this;
    }

    /**
     * @param Ringtone $ringtone
     */
    public function setRingtone(Ringtone $ringtone)
    {
        $this->ringtone = $ringtone;
    }

    use ToArray;

}