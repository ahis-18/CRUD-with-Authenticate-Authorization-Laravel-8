<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Suranto',
            'username' => 'ranto',
            'email' => 'suranto@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Hisyam',
            'username' => 'hisyam',
            'email' => 'hisyam@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Animasi',
            'slug' => 'animasi'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Post::create([
            'title' => 'Belajar HTML',
            'slug' => 'belajar-html',
            'excerpt' => 'Belajar HTML dengan teknik kekinian mudah dan menyenangkan',
            'body' => 'Belajar HTML dengan teknik kekinian mudah dan menyenangkan, dengan metode step by step, dan berbasis project learning, di kelas ini akan mendapatkan sertifikat resmi dari GOKIL',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Belajar React Native',
            'slug' => 'belajar-react-native',
            'excerpt' => 'Belajar React Native dengan teknik kekinian mudah dan menyenangkan',
            'body' => 'Belajar React Native dengan teknik kekinian mudah dan menyenangkan, dengan metode step by step, dan berbasis project learning, di kelas ini akan mendapatkan sertifikat resmi dari GOKIL',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Belajar Duik Diessel',
            'slug' => 'belajar-duik-diessel',
            'excerpt' => 'Belajar Duik Diessel dengan teknik kekinian mudah dan menyenangkan',
            'body' => 'Belajar Duik Diessel dengan teknik kekinian mudah dan menyenangkan, dengan metode step by step, dan berbasis project learning, di kelas ini akan mendapatkan sertifikat resmi dari GOKIL',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Belajar Pen Tool',
            'slug' => 'belajar-pen-tool',
            'excerpt' => 'Belajar Pen Tool dengan teknik kekinian mudah dan menyenangkan',
            'body' => 'Belajar Pen Tool dengan teknik kekinian mudah dan menyenangkan, dengan metode step by step, dan berbasis project learning, di kelas ini akan mendapatkan sertifikat resmi dari GOKIL',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
