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

    /**
     * Checks if a string starts with a given character.
     * @param string $_str - The string to be searched.
     * @param string $_char - The string character to be found or not.
     * @return bool
     */
    function startsWith($_str, $_char) {
        return ($_char === $_str[0]);
    }

    /**
 * Checks if a string ends with a given character.
 * @param string $_str - The string to be searched.
 * @param string $_char - The string character to be found or not.
 * @return bool
 */
    function endsWith($_str, $_char) {
        return ($_char === $_str[strlen($_str) - 1]);
    }

?>