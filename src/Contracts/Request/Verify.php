<?php

namespace Src\Contracts\Request;

interface  Verify
{
    /**
     * validate for request params
     *
     * @return mixed
     */
    public function validate(): bool;
}