<?php

namespace Src;

use Src\Contracts\Request\Assign;
use Src\Contracts\Request\Verify;

abstract class Request implements Verify, Assign
{
    private $request;

    /**
     * Request constructor.
     *
     * @param array $request
     */
    public function __construct(array $request)
    {
        $this->request = $request;
    }

    /**
     * @return array
     */
    public function getRequest(): array
    {
        return $this->request;
    }
}
