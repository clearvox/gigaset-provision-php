<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class NetDir
 * @package Clearvox\Gigaset\Provision
 */
class NetDir
{
    /**
     * @var LDAP[]
     */
    private $LDAP = [];

    /**
     * @return LDAP[]
     */
    public function getLDAP()
    {
        return $this->LDAP;
    }

    /**
     * @param LDAP[] $LDAP
     * @returns $this
     */
    public function setLDAP($LDAP)
    {
        $this->LDAP = $LDAP;
        return $this;
    }

    use ToArray;

}