<?php

namespace Src\Contracts\Request;

interface  Assign
{
    /**
     * assign request to class
     *
     * @param array $request
     * @param string $class
     * @param string $method
     * @throws \Src\Exception\AssignException
     */
    public function assign(array $request,string $class,string $method): void;
}
