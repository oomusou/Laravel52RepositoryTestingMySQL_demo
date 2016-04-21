<?php

use App\Post;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }

    /**
     * @test
     */
    public function MySQL測試料庫連線()
    {
        /** arrange */
        $expected = 0;

        /** act */
        $actual = Post::all();

        /** assert */
        $this->assertCount($expected, $actual);
    }
}
