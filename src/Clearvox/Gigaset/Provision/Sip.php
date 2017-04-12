<?php
namespace Clearvox\Gigaset\Provision;

class SIP {

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
        if(($key = array_search($account, $this->accounts)) !== false) {
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
     * @return Account
     */
    public function getDefaultAccount()
    {
        return $this->defaultAccount;
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

    /**
     * @return array
     */
    public function toArray()
    {
        foreach($this->accounts as $account) {
            $output['Account'][] = $account->toArray();
        }

        $output = [
            'DefaultAccount' => array_search($this->defaultAccount, $this->accounts)
        ];

        return $output;
    }

}