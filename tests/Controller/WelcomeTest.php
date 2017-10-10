<?php

use PHPUnit\Framework\TestCase;

class WelcomeTest extends TestCase
{
    public function testWelcomeHello()
    {
        $name = 'test';

        $request = new \Src\Request\Welcome\Hello([
            'name' => $name,
        ]);
        $request->validate($request->getRequest(), 'Welcome', 'hello');
        $request->assign($request->getRequest(), 'Welcome', 'hello');

        $controller = new \Src\Controller\Welcome();
        $response = $controller->hello($request);

        $this->assertArrayHasKey('msg', $response);
        $this->assertInternalType('string', $response['msg']);
    }

    /**
     * @expectedException \Src\Exception\ValidateException
     */
    public function testWelcomeValidate()
    {
        $name = 'testtesttesttesttesttesttesttesttest';

        $request = new \Src\Request\Welcome\Validate([
            'name' => $name,
        ]);
        $request->validate($request->getRequest(), 'Welcome', 'validate');
    }
}
