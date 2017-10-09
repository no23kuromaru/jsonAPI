<?php

namespace Src\Controller;

use Src\Request\Welcome\Hello;

class Welcome extends Controller
{
    /**
     * call request hello
     *
     * @param \Src\Request\Welcome\Hello $requestHello
     * @return array
     */
    public function hello(Hello $requestHello): array
    {
        return [
            'msg' => 'Hello '.$requestHello->getName(),
        ];
    }
}
