<?php

namespace Src\Contracts\Request;

interface  Verify
{
    /**
     * validate for request params
     *
     * @param array $request
     * @param string $class
     * @param string $method
     * @throws \Src\Exception\ValidateException
     * @return bool
     */
    public function validate(array $request, string $class, string $method): bool;
}
