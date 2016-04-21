<?php

use App\Post;
use App\Repositories\PostRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostRepositoryTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function 最新3筆文章()
    {
        /** arrange */
        factory(Post::class, 100)->create();
        $target = App::make(PostRepository::class);
        $expected = 3;

        /** act */
        $actual = $target->getLatest3Posts()->count();

        /** assert */
        $this->assertEquals($expected, $actual);
    }
}
