<?php

namespace Reveal\Framework\Classes;

use Reveal\Framework\Contracts\FrameworkContract;

Class FrameworkClass implements FrameworkContract
{
    public function routes()
    {
        include __DIR__."../../Routes/web.php";
    }
}
