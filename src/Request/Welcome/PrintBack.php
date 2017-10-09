<?php

namespace Src\Request\Welcome;

use Src\Request;
use Src\Request\Assignable;
use Src\Request\Verifiable;

class PrintBack extends Request
{
    use Verifiable, Assignable;
}
