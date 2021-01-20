<?php
namespace Modules\Media\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFolderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Media\Entities\MediaFolder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
