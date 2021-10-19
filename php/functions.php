<?php

    /** */
    function getKeys($_keys_str) {
        $str = sanitizeKeysString($_keys_str, ",");
        $keys = explode(",", $str);
        return $keys;
    }

    /**
     * Removes `,` from the beginning or end of a given string.
     * @param string $_str - The string to sanitize.
     * @param string $_char - The character to remove.
     * @return string
     */
    function sanitizeKeysString($_str, $_char) {
        $sanitized_str = "";
        if (startsWith($_str, $_char)) {
            $sanitized_str = substr_replace($_str , "", 0);
            if (endswith($sanitized_str, $_char)) {
                $sanitized_str = substr_replace($_str , "", -1);
            }
        }
        if (endsWith($_str, $_char)) {
            $sanitized_str = substr_replace($_str , "", -1);
            if (startswith($sanitized_str, $_char)) {
                $sanitized_str = substr_replace($_str , "", 0);
            }
        }
        return $sanitized_str;
    }

    function startsWith($haystack, $needle) {
        return ($needle === $haystack[0]);
    }

    function endsWith($haystack, $needle) {
        return ($needle === $haystack[strlen($haystack) - 1]);
    }

?>