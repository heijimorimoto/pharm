<?php

namespace Tests\Api\Integration\Client;

use Tests\TestCase;

class IndexTest extends TestCase
{
    /**
     * Test status code
     *
     * @return void
     */
    public function testShouldStatusSuccessTest()
    {
        $response = $this->get('api/clients');

        $response->assertStatus(200);
    }
}