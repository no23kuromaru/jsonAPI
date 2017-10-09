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

        $controller = new \Src\Controller\Welcome();
        $response = $controller->hello($request);

        $this->assertArrayHasKey('msg', $response);
        $this->assertInternalType('string', $response['msg']);
    }
}
