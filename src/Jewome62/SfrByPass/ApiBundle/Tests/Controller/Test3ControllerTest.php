<?php

namespace Jewome62\SfrByPass\ApiBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class Test3ControllerTest extends WebTestCase
{
    public function testTest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'test2');
    }

}