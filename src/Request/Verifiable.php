<?php

namespace Src\Request;

trait Verifiable
{
    /**
     * validate for request params
     *
     * @param array $request
     * @throws \Src\Exception\ValidateException
     * @return bool
     */
    public function validate(array $request): bool
    {
        return true;
    }
}
