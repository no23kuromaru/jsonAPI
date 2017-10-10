<?php

namespace Src\Request\Welcome;

use Src\Request;
use Src\Request\Assignable;
use Src\Request\VerifyJsonSchema;

class Validate extends Request
{
    use VerifyJsonSchema, Assignable;

    private $name;

    public function getName(): string
    {
        return $this->name;
    }
}
