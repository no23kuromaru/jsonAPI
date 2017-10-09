<?php

namespace Src\Request;

use Src\Contracts\Request\Verify;

abstract class Request implements Verify
{
    /**
     * Request constructor.
     *
     * @param array $request
     */
    public function __construct(array $request)
    {
        $this->validate($request);
        $this->assign($request);
    }
}
