<?php namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class EchoControllerTest
 * @package App\Tests\Controller
 */
class EchoControllerTest extends WebTestCase
{

    public function test_echo_index()
    {
        $client = $this->createClient();
        $client->request(Request::METHOD_GET, '/echo');
        $this->assertEquals($client->getResponse()->getContent(), '{"message":"echo!"}');
    }
}