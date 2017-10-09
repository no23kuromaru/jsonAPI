<?php

namespace Src\Request;

trait Verifiable
{
    /**
     * validate for request params
     *
     * @param array $request
     * @return bool
     */
    public function validate(array $request): bool
    {
        return true;
    }

    /**
     * assign request to class
     *
     * @param array $request
     * @return mixed
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
