<?php

namespace Src\Runner;

use Src\Controller\Controller;
use Src\Request\Request;

class Runner implements \JsonSerializable
{
    private $actionResults = [];

    public function actionCall(array $userCall)
    {
        foreach ($userCall as $class => $methodList) {
            foreach ($methodList as $method => $params) {
                // create request and controller
                $controller = $this->resolveController($class);

                $request = $this->resolveRequest($class, $method, $params);

                $result = call_user_func_array([$controller, $method], [$request]);
                $this->setActionResult($class, $method, $result);
            }
        }
    }

    protected function setActionResult($class, $method, $result)
    {
        $this->actionResults[$class][$method] = $result;
    }

    protected function resolveController(string $class): Controller
    {
        $instance = "Src\\Controller\\".ucfirst($class);

        return new $instance();
    }

    protected function resolveRequest(string $class, string $method, $params): Request
    {
        $instance = "Src\\Request\\".ucfirst($class)."\\".ucfirst($method);

        return new $instance($params);
    }

    public function getActionResults(): array
    {
        return $this->actionResults;
    }

    /**
     * Specify data which should be serialized to JSON
     *
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return $this->getActionResults();
    }
}
