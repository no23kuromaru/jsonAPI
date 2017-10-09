<?php

namespace Src\Contracts\Request;

interface  Verify
{
    /**
     * validate for request params
     *
     * @param array $request
     * @throws \Src\Exception\ValidateException
     * @return bool
     */
    public function validate(array $request): bool;
}
