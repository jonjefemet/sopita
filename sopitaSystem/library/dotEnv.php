<?php

namespace SopitaSystem\Library;

class DotEnv
{

    public string $path;

    public function __construct(string $path)
    {
        if ($path == "") {
            $this->path = APP_PATH . "/.env";
        } else {
            $this->path = APP_PATH . $path;
        }
        if (!file_exists($this->path)) {
            #TODO: add expetion
        }
    }

    public function load(): void
    {
        if (is_readable($this->path)) {
            #TODO: add expetion
        }

        $lines = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {

            if (strpos(trim($line), "#") === 0) {
                continue;
            }

            [$name, $value] = explode("=", $line, 2);

            $name = trim($name);
            $value = trim($value);

            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                putenv(sprintf("%s=%s", $name, $value));
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }
}
