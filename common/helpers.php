<?php

function get($field=null, $default = null) {
    if ($field) {
        return $_GET[$field] ?: $default;
    }

    return $_GET ?:[];
}

function post($field=null, $default = null) {
    $data = $_POST;

    if (str_has(server('CONTENT_TYPE'), 'application/json')) {
        $data = json_decode(file_get_contents('php://input'), true);
    }

    if ($field) {
        return $data[$field] ?: $default;
    }

    return $data ?:[];
}

function server($field=null, $default = null) {
    if ($field) {
        return $_SERVER[$field] ?: $default;
    }

    return $_SERVER ?:[];
}

function str_has($haystack, $needles)
{
    foreach ((array) $needles as $needle) {
        if ($needle !== '' && mb_strpos($haystack, $needle) !== false) {
            return true;
        }
    }

    return false;
}

function e($contents)
{
    echo $contents;
}
