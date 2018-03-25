<?php

use Animex\Models\Post;
use Carbon\Carbon;
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
            'user_id' => '3',
            'title' => 'Dragon Ball Super',
            'slug' => 'dragon-ball-super',
            'image' => 'dragon-ball-super.jpg',
            'image_alt' => 'Dragon Ball Super',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p>',
            'active' => 1,
            'seo_title' => 'Dragon Ball Super',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus offici ...',
            'meta_robots' => 'index, follow',
            'published_at' => Carbon::now(),
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
            'published_at' => Carbon::now()->addSeconds(1),
        ]);

        Post::create([
            'category_id' => '1',
            'user_id' => '2',
            'title' => 'Shingeki no Kyojin',
            'slug' => 'shingeki-no-kyojin',
            'image' => 'shingeki-no-kyojin.jpg',
            'image_alt' => 'Shingeki no Kyojin',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p>',
            'active' => 1,
            'seo_title' => 'Shingeki no Kyojin',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus offici ...',
            'meta_robots' => 'index, follow',
            'published_at' => Carbon::now()->addSeconds(2),
        ]);

        Post::create([
            'category_id' => '1',
            'user_id' => '4',
            'title' => 'Death Note',
            'slug' => 'death-note',
            'image' => 'death-note.jpg',
            'image_alt' => 'Death Note',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus officiis optio quas repudiandae sequi similique soluta suscipit velit. Voluptates.</p>',
            'active' => 1,
            'seo_title' => 'Code Geas',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores autem corporis distinctio dolore doloremque doloribus enim, maxime nam natus offici ...',
            'meta_robots' => 'index, follow',
            'published_at' => Carbon::now()->addSeconds(3),
        ]);

        Post::create([
            'category_id' => '1',
            'user_id' => '1',
            'title' => 'Boku no Hero Academia',
            'slug' => 'boku-no-hero-academia',
            'image' => 'boku-no-hero-academia.jpg',
            'image_alt' => 'Boku no Hero Academia',
            'content' => '<p>My Hero Academia (Japanese: 僕のヒーローアカデミア Hepburn: Boku no Hīrō Akademia) is a comedy adventure manga series written and illustrated by Kōhei Horikoshi. It has been serialized in Weekly Shōnen Jump since July 2014,&nbsp;and 17 volumes have been collected in tankōbon format. The series has been licensed for English-language release by Viz Media, and began serialization in their weekly digital manga anthology Weekly Shonen Jump on February 9, 2015.</p><p>The story follows Izuku Midoriya, a boy born without superpowers in a world where they are the norm, but who still dreams of becoming a superhero himself, and is scouted by the world&#39;s greatest hero who shares his powers with Izuku after recognizing his value and enrolls him in a high school for heroes in training. The manga was adapted into an anime television series animated by Studio Bones. Its first season aired in Japan from April 3 to June 26, 2016, followed by a second season from April 1 to September 30, 2017. A third season has been announced, to start airing in April 2018,&nbsp;as well as an animated film for release in the same year.</p>',
            'active' => 1,
            'seo_title' => 'Boku no Hero Academia',
            'seo_description' => 'My Hero Academia (Japanese: 僕のヒーローアカデミア Hepburn: Boku no Hīrō Akademia) is a comedy adventure manga series written and illustrated by Kōhei Horikoshi',
            'meta_robots' => 'index, follow',
            'published_at' => Carbon::now()->addSeconds(4),
        ]);

        $this->command->info('Posts Table Seeded !');
    }
}
