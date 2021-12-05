<?php

/**
 * Returns the keys of a json object.
 * @param  string $str The string of keys.
 * @return array
 */
function get_keys($str) {
    // Split string by ',' and remove all empty strings, and reindex to get all keys.
    $keys = array_values(array_filter(explode(",", $str), 'strlen'));
    // Trim and render all keys as lower case values, replace spaces in keys with '_'.
    foreach ($keys as &$key)
        $key = preg_replace('/[\s-]+/', '_', strtolower(trim($key)));
    return $keys;
}

/**
 * Escapes form submitted value.
 * @param string $str The form value to be escaped.
 * @return array|string|null
 */
function esc($str) {
    // Trim, strip tags and remove special chars from input string in that order.
    return preg_replace('/[^A-Za-z0-9\,\s-]/', '', strip_tags(trim($str)));
}
