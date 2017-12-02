<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
	use DatabaseTransaction;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
        	'create_at' => \Carbon\Carbon::now()->subMonth()
        	]);

        $posts = Post::archives();
        dd($posts);

        $this->assertCount([
        	[
        	"year" => $first->create_at->format('Y'),
        	"month" => $first->create_at->format('F'),
        	"published" => 1
        	],
        	[
        	"year" => $second->create_at->format('Y'),
        	"month" => $second->create_at->format('F'),
        	"published" => 1
        	],

        	], $posts);
    }
}
