<?php

spl_autoload_register(function ($class) {

    $class = explode("\\", $class);

    foreach ($class as &$value) {
        $value = lcfirst($value);
    }

    require_once APP_PATH . "/" . implode("/", $class) . ".php";
});
