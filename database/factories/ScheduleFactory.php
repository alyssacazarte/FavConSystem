<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_type' => 'Social Media Management',
            'service_description' => 'This service involves managing and maintaining your social media profiles on various platforms such as Facebook, Twitter, Instagram, and LinkedIn. I would be responsible for creating and curating content, scheduling posts, engaging with followers, and monitoring analytics to measure the success of the social media strategy.',
            'service_duration' => '45'
        ];
    }
}
