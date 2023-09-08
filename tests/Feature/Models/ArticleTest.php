<?php

namespace Tests\Feature\Models;

use App\Models\Article;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
     use DatabaseTransactions;

    /**
     * @test
     * @author Ali Ghorbani
     */
    public function it_fetches_trending_articles(): void
    {
        Article::factory(2)->create();
        Article::factory()->create(['reads' => 10]);
        $mostPopular = Article::factory()->create(['reads' => 20]);

        $articles = Article::trending();

        $this->assertEquals($mostPopular->id, $articles->first()->id);
        $this->assertCount(4, $articles);
    }
}
