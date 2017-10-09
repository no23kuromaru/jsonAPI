<?php

namespace Src\Request\Welcome;

use Src\Request;
use Src\Request\Verifiable;

class Hello extends Request
{
    use Verifiable;

    private $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
