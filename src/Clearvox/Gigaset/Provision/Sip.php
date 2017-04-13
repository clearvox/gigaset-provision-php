<?php
namespace Clearvox\Gigaset\Provision;

class SIP
{

    /**
     * @var Account[]
     */
    private $account;

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
        $this->account[] = $account;
        return $this;
    }

    /**
     * @param Account $account
     * @return $this
     */
    public function removeAccount(Account $account)
    {
        if (($key = array_search($account, $this->account)) !== false) {
            unset($this->account[$key]);
        }
        return $this;
    }

    /**
     * @return Account[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return int
     */
    public function getDefaultAccount()
    {
        return array_search($this->defaultAccount, $this->account) ?: 0;
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