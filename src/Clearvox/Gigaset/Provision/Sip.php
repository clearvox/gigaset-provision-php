<?php
namespace Clearvox\Gigaset\Provision;

class SIP
{

    /**
     * @var Account[]
     */
    private $accounts;

    /**
     * @var Account
     */
    private $defaultAccount;

    /**
     * @param Account $account
     * @return $this
     */
    public function addAccount(Account $account)
    {
        $this->accounts[] = $account;
        return $this;
    }

    /**
     * @param Account $account
     * @return $this
     */
    public function removeAccount(Account $account)
    {
        if (($key = array_search($account, $this->accounts)) !== false) {
            unset($this->accounts[$key]);
        }
        return $this;
    }

    /**
     * @return Account[]
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * @return int
     */
    public function getDefaultAccount()
    {
        return array_search($this->defaultAccount, $this->accounts) ?: 0;
    }

    /**
     * @param Account $defaultAccount
     * @returns $this
     */
    public function setDefaultAccount(Account $defaultAccount)
    {
        $this->defaultAccount = $defaultAccount;
        return $this;
    }

    use ToArray;

}