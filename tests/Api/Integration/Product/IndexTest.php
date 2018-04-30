<?php

namespace Tests\Api\Integration\Product;

use Tests\TestCase;

class IndexTest extends TestCase
{
    private $url = 'api/products';

    /**
     * Test status code
     *
     * @return void
     */
    public function testShouldSuccessCodeTest()
    {
        $response = $this->get($this->url);
        $response->assertStatus(200);
    }
}