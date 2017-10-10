<?php

namespace Src\Request;

use JsonSchema\Validator;
use Src\Exception\ValidateException;

trait VerifyJsonSchema
{
    protected $schemaType = 'json';

    private $jsonErrors = [];

    /**
     * validate for request params
     * use json schema
     *
     * @param array $request
     * @param string $class
     * @param string $method
     * @throws \Src\Exception\ValidateException
     * @return bool
     */
    public function validate(array $request, string $class, string $method): bool
    {
        $class = ucfirst($class);
        $method = ucfirst($method);

        $schema = json_decode(file_get_contents(realpath(__DIR__).'/../Schema/'.$class.'/'.$method.'.'.$this->schemaType));
        $request = json_decode(json_encode($request));

        $validator = new Validator();
        $validator->validate($request, $schema);

        if ($validator->isValid()) {
            return true;
        } else {
            $this->jsonErrors = $validator->getErrors();

            throw new ValidateException();
        }
    }

    /**
     * @return array
     */
    public function getJsonErrors(): array
    {
        return $this->jsonErrors;
    }
}
