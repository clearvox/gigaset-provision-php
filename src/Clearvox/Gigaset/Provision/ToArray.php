<?php
namespace Clearvox\Gigaset\Provision;

trait ToArray {

    /**
     * Build an array with all properties of the object
     * Ignoring those prefixed with _
     *
     * @return array
     */
    public function toArray()
    {
        $output = [];

        foreach ($this as $key => $value) {
            // Ignore properties prefixed with _
            if(substr($key, 0, 1) === '_') continue;

            if (is_object($value)) {
                if (method_exists($value, 'toArray')) {
                    $output[ucfirst($key)] = $value->toArray();
                    continue;
                }
            }
            $getter = "get" . ucfirst($key);

            if(method_exists($this, $getter)) {
                $output[ucfirst($key)] = $this->$getter();
            } else {
                $output[ucfirst($key)] = $value;
            }
        }

        return $output;
    }
}