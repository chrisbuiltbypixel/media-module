<?php

namespace Modules\Blog\Tests\Feature\Nucleus;

use Modules\Media\Entities\MediaFolder;
use Modules\Blog\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MediaFolderTest extends TestCase
{

    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->actAsAdminUser();
        $this->withoutExceptionHandling();
    }

    public function test_we_can_create_a_new_folder()
    {
        $folder = MediaFolder::factory()->make()->toArray();

        $response = $this->post('api/media-folders', $folder);

        $response->assertStatus(201);
    }

    public function test_we_can_edit_a_folder()
    {
        $folder = MediaFolder::factory()->create();

        $data = [
            'title' => 'New Title',
        ];

        $response = $this->put("api/media-folders/$folder->id", $data);

        $response->assertStatus(201);

        $folder->refresh();

        $this->assertEquals($data['title'], $folder->title);
        $this->assertEquals($data['content'], $folder->content);

    }

    public function test_we_can_delete_a_folder()
    {
        $folder = MediaFolder::factory()->create();

        $data = [
            'id' => [
                $folder->id,
            ],
        ];

        $response = $this->delete('api/media-folders', $data);

        $response->assertStatus(201);

        $this->assertDatabaseCount('media_folders', 0);

    }
}
