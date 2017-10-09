<?php

namespace Src\Request\Welcome;

use Src\Request;
use Src\Request\Assignable;
use Src\Request\Verifiable;

class Hello extends Request
{
    use Verifiable, Assignable;

    private $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
