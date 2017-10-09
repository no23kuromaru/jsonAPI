<?php

namespace Src\Request;

use Src\Contracts\Request\Verify;

abstract class Request implements Verify
{
    public function __construct(array $request)
    {
        $this->validate($request);
        $this->assign($request);
    }
}
