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
    public function addLDAP($LDAP)
    {
        $this->LDAP[] = $LDAP;
        return $this;
    }

    public function removeLDAP($LDAP)
    {
        if (($key = array_search($LDAP, $this->LDAP)) !== false) {
            unset($this->LDAP[$key]);
        }

        return $this;
    }

    use ToArray;

}