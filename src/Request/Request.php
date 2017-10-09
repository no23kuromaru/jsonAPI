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

    private function assign(array $request)
    {
        foreach ($request as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}
