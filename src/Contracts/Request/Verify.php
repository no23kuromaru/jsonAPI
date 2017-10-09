<?php

namespace Src\Contracts\Request;

interface  Verify
{
    public function validate(array $request);
}