<?php

use Animex\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'category_id' => '1',
            'user_id' => '1',
            'title' => 'Dragon Ball Super',
            'slug' => 'dragon-ball-super',
            'image' => 'dragon-ball-super.jpg',
            'image_alt' => 'Dragon Ball Super',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p>',
            'active' => 1,
            'seo_title' => 'Dragon Ball Super',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus offici ...',
            'meta_robots' => 'index, follow',
        ]);

        Post::create([
            'category_id' => '1',
            'user_id' => '1',
            'title' => 'Yowamushi Pedal',
            'slug' => 'yowamushi-pedal',
            'image' => 'yowamushi-pedal.jpg',
            'image_alt' => 'Yowamushi Pedal',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p>',
            'active' => 1,
            'seo_title' => 'Yowamushi Pedal',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus offici ...',
            'meta_robots' => 'index, follow',
        ]);

        Post::create([
            'category_id' => '1',
            'user_id' => '1',
            'title' => 'Shingeki no Kyojin',
            'slug' => 'shingeki-no-kyojin',
            'image' => 'shingeki-no-kyojin.jpg',
            'image_alt' => 'Shingeki no Kyojin',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p>',
            'active' => 1,
            'seo_title' => 'Shingeki no Kyojin',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus offici ...',
            'meta_robots' => 'index, follow',
        ]);

        Post::create([
            'category_id' => '1',
            'user_id' => '1',
            'title' => 'Code Geas',
            'slug' => 'code-geas',
            'image' => 'code-geas.jpg',
            'image_alt' => 'Code Geas',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p>',
            'active' => 1,
            'seo_title' => 'Code Geas',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus offici ...',
            'meta_robots' => 'index, follow',
        ]);

        $this->command->info('Posts Table Seeded !');
    }
}
