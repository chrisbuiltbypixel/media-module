<?php

namespace Modules\Blog\Tests\Feature\Nucleus;

use Modules\Blog\Tests\TestCase;
use Modules\Blog\Entities\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MediaTest extends TestCase
{

    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->actAsAdminUser();
        $this->withoutExceptionHandling();
    }

    public function test_we_can_get_a_list_of_files_and_folders()
    {
        $response = $this->get('api/media');

        $response->assertStatus(200);
    }

}
