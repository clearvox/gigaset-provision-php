<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class ProgrammableKeys
 * @package Clearvox\Gigaset\Provision
 */
class ProgrammableKeys
{
    /**
     * @var Directory
     */
    private $directory;

    /**
     * @return Directory
     */
    public function getDirectory()
    {
        if(!$this->directory) {
            $this->directory = new Directory();
        }

        return $this->directory;
    }

    /**
     * @param Directory $directory
     * @returns $this
     */
    public function setDirectory(Directory $directory)
    {
        $this->directory = $directory;
        return $this;
    }


    use ToArray;
}
