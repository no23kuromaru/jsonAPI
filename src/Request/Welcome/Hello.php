<?php

namespace Src\Request\Welcome;

use Src\Request\Request;

class Hello extends Request
{
    protected $name;

    public function validate(array $request)
    {
        return true;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
