<?php

namespace Src\Request;

trait Verifiable
{
    /**
     * validate for request params
     *
     * @return bool
     */
    public function validate(): bool
    {
        return true;
    }
}
