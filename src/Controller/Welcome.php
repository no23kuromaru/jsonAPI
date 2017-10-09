<?php

namespace Src\Controller;

use Src\Controller;
use Src\Request\Welcome\PrintBack;
use Src\Request\Welcome\Hello;

class Welcome extends Controller
{
    /**
     * echo back
     *
     * @param \Src\Request\Welcome\PrintBack $requestBack
     * @return array
     */
    public function printBack(PrintBack $requestBack): array
    {
        return $requestBack->getRequest();
    }

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
