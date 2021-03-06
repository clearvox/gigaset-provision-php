<?php
namespace Clearvox\Gigaset\Provision;

trait ToArray
{
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
            if (substr($key, 0, 1) === '_') {
                continue;
            }

            $boolGet = 'is' . ucfirst($key);
            if (method_exists($this, $boolGet)) {
                $value = $this->$boolGet() ? 1 : 0;
            }

            $getter = "get" . ucfirst($key);
            if (method_exists($this, $getter)) {
                $value = $this->$getter();
            }

            if (is_object($value)) {
                if (method_exists($value, 'toArray')) {
                    $output[ucfirst($key)] = $value->toArray();
                    continue;
                }
            }

            if (is_array($value)) {
                /**
                 * @var ToArray $v
                 */
                foreach ($value as $i => $v) {
                    if(is_object($v) && method_exists($v, 'toArray')) {
                        $output[ucfirst($key)][$i] = $v->toArray();
                    } else {
                        $output[ucfirst($key)][$i] = $v;
                    }
                }
                continue;
            }

            if (($value || $value === 0 || $value === '')) {
                $output[ucfirst($key)] = $value;
            }
        }

        return $output;
    }
}