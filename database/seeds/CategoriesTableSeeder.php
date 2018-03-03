<?php

use Animex\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Shonen',
            'slug' => 'shonen',
            'active' => 1,
        ]);

        Category::create([
            'name' => 'Spokon',
            'slug' => 'spokon',
            'active' => 1,
        ]);

        Category::create([
            'name' => 'Mecha',
            'slug' => 'mecha',
            'active' => 1,
        ]);

        $this->command->info('Categories Table Seeded !');
    }
}
