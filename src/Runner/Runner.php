<?php

namespace Src\Runner;

use Src\Controller\Controller;
use Src\Request\Request;

class Runner implements \JsonSerializable
{
    private $actionResults = [];

    /**
     * call user request methods.
     *
     * @param array $userCall
     */
    public function actionCall(array $userCall): void
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

    /**
     * @param string $class
     * @param string $method
     * @param $result
     */
    protected function setActionResult(string $class, string $method, $result)
    {
        $this->actionResults[$class][$method] = $result;
    }

    /**
     * @param string $class
     * @return \Src\Controller\Controller
     */
    protected function resolveController(string $class): Controller
    {
        $instance = "Src\\Controller\\".ucfirst($class);

        return new $instance();
    }

    /**
     * @param string $class
     * @param string $method
     * @param $params
     * @return \Src\Request\Request
     */
    protected function resolveRequest(string $class, string $method, $params): Request
    {
        $instance = "Src\\Request\\".ucfirst($class)."\\".ucfirst($method);

        return new $instance($params);
    }

    /**
     * @return array
     */
    public function getActionResults(): array
    {
        return $this->actionResults;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->getActionResults();
    }

    public function __toString()
    {
        return json_encode($this);
    }
}
