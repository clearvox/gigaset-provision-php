<?php
namespace Clearvox\Gigaset\Provision;

class WebUI {

    /**
     * @var string
     */
    private $adminPassword;

    /**
     * @var string
     */
    private $userPassword;

    /**
     * @var boolean
     */
    private $showPassword;

    /**
     * @var boolean
     */
    private $allowAccessWeb;

    /**
     * @return string
     */
    public function getAdminPassword()
    {
        return $this->adminPassword;
    }

    /**
     * @param string $adminPassword
     * @returns $this
     */
    public function setAdminPassword($adminPassword)
    {
        $this->adminPassword = $adminPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param string $userPassword
     * @returns $this
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isShowPassword()
    {
        return $this->showPassword;
    }

    /**
     * @param boolean $showPassword
     * @returns $this
     */
    public function setShowPassword($showPassword)
    {
        $this->showPassword = $showPassword;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isAllowAccessWeb()
    {
        return $this->allowAccessWeb;
    }

    /**
     * @param boolean $allowAccessWeb
     * @returns $this
     */
    public function setAllowAccessWeb($allowAccessWeb)
    {
        $this->allowAccessWeb = $allowAccessWeb;
        return $this;
    }


    use ToArray;
}