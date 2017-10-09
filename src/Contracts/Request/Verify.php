<?php

namespace Src\Contracts\Request;

interface  Verify
{
    /**
     * validate for request params
     *
     * @param array $request
     * @return mixed
     */
    public function validate(array $request): bool;

    /**
     * assign request to class
     *
     * @param array $request
     * @return mixed
     */
    public function assign(array $request): void;
}