<?php

namespace Src\Request;

trait Assignable
{
    /**
     * assign request to class
     *
     * @param array $request
     * @param string $class
     * @param string $method
     * @throws \Src\Exception\AssignException
     */
    public function assign(array $request, string $class, string $method): void
    {
        foreach ($request as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}
