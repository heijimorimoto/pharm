<?php

namespace Tests\Api\Integration\Product;

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
        $response = $this->get('api/product');

        $response->assertStatus(200);
    }
}