<?php

spl_autoload_register(function ($class) {
    require_once APP_PATH . "/" . strtolower(str_replace("\\", "/", $class)) . ".php";
});
