<?php

namespace Src\Contracts\Request;

interface  Assign
{
    /**
     * assign request to class
     *
     * @param array $request
     * @throws \Src\Exception\AssignException
     * @return mixed
     */
    public function assign(array $request): void;
}