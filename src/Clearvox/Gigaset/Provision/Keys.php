<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class Keys
 * @package Clearvox\Gigaset\Provision
 */
class Keys
{
    /**
     * @var FunctionKey[]
     */
    private $functionKeys;

    /**
     * @var QuickDialKey[]
     */
    private $quickDialKeys;

    /**
     * @return FunctionKey[]
     */
    public function getFunctionKeys()
    {
        return $this->functionKeys;
    }

    /**
     * @param FunctionKey $functionKeys
     * @returns $this
     */
    public function addFunctionKey(FunctionKey $functionKeys)
    {
        $this->functionKeys[] = $functionKeys;
        return $this;
    }

    /**
     * @param FunctionKey $functionKey
     * @return $this
     */
    public function removeFunctionKey(FunctionKey $functionKey)
    {
        if (($key = array_search($functionKey, $this->functionKeys)) !== false) {
            unset($this->functionKeys[$key]);
        }
        return $this;
    }

    /**
     * @return QuickDialKey[]
     */
    public function getQuickDialKeys()
    {
        return $this->quickDialKeys;
    }

    /**
     * @param QuickDialKey $quickDialKeys
     * @returns $this
     */
    public function addQuickDialKey(QuickDialKey $quickDialKeys)
    {
        $this->quickDialKeys[] = $quickDialKeys;
        return $this;
    }

    /**
     * @param QuickDialKey $quickDialKey
     * @return $this
     */
    public function removeQuickDialKey(QuickDialKey $quickDialKey)
    {
        if (($key = array_search($quickDialKey, $this->quickDialKeys)) !== false) {
            unset($this->quickDialKeys[$key]);
        }
        return $this;
    }

    use ToArray;

}
