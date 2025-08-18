<?php
namespace Clearvox\Gigaset\Provision;

trait XMLHelper
{
    /**
     * @param string $input
     * @returns $string
     */
    function xml_escape($input) {
        // Convert special characters to their respective XML entities
        // implementation based on https://ssojet.com/escaping/xml-escaping-in-php/
        return htmlspecialchars($input, ENT_XML1, 'UTF-8');
    }
}