<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class ColorScheme
 * @package Clearvox\Gigaset\Provision
 */
class ColorScheme
{
    /**
     * @var int
     */
    private $tree;

    /**
     * @var int
     */
    private $basic;

    /**
     * @return int
     */
    public function getTree()
    {
        return $this->tree;
    }

    /**
     * @param int $tree
     * @returns $this
     */
    public function setTree($tree)
    {
        $this->tree = $tree;
        return $this;
    }

    /**
     * @return int
     */
    public function getBasic()
    {
        return $this->basic;
    }

    /**
     * @param int $basic
     * @returns $this
     */
    public function setBasic($basic)
    {
        $this->basic = $basic;
        return $this;
    }

    use ToArray;
}