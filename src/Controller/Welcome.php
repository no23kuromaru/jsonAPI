<?php

namespace Src\Controller;

use Src\Request\Welcome\Hello;

class Welcome extends Controller
{
    public function hello(Hello $requestHello): array
    {
        return [
            'msg' => 'Hello '.$requestHello->getName(),
        ];
    }
}
