<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class Directory
 * @package Clearvox\Gigaset\Provision
 */
class Directory
{
    /**
     * @var int
     */
    private $type;

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @returns $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


    use ToArray;
}