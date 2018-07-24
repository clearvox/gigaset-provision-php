<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class DateAndTime
 * @package Clearvox\Gigaset\Provision
 */
class Security
{
    /** @var boolean */
    private $acceptAllCertificates;
    /** @var string */
    private $httpAuthUsername;
    /** @var string */
    private $httpAuthPassword;

    /**
     * @return string
     */
    public function getAcceptAllCertificates()
    {
        return $this->acceptAllCertificates;
    }

    /**
     * @param string $acceptAllCertificates
     *
     * @return $this
     */
    public function setAcceptAllCertificates($acceptAllCertificates)
    {
        $this->acceptAllCertificates = $acceptAllCertificates;
        return $this;
    }

    /**
     * @return string
     */
    public function getHttpAuthUsername()
    {
        return $this->httpAuthUsername;
    }

    /**
     * @param string $httpAuthUsername
     *
     * @return $this
     */
    public function setHttpAuthUsername($httpAuthUsername)
    {
        $this->httpAuthUsername = $httpAuthUsername;
        return $this;
    }

    /**
     * @return string
     */
    public function getHttpAuthPassword()
    {
        return $this->httpAuthPassword;
    }

    /**
     * @param string $httpAuthPassword
     * @return $this
     */
    public function setHttpAuthPassword($httpAuthPassword)
    {
        $this->httpAuthPassword = $httpAuthPassword;
        return $this;
    }

    use ToArray;
}