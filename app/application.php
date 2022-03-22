<?php

namespace App;

use SopitaSystem\Library\DotEnv;

class Application
{

    public function run()
    {
        (new DotEnv(""))->load();
    }
}
