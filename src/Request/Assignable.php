<?php

namespace Src\Request;

trait Assignable
{
    /**
     * assign request to class
     *
     * @param array $request
     */
    public function assign(array $request): void
    {
        foreach ($request as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}
