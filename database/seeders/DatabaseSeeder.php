<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Beno Dwianto',
        //     'email' => 'ben@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Ronaldo',
        //     'email' => 'ron@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor pertama',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quo sed soluta, optio facilis fugiat molestias quis cupiditate delectus eum laborum iste necessitatibus exercitationem eius quia ducimus amet earum repellat sint illum. Hic quae, harum corrupti dolorem obcaecati sit aspernatur, amet sint ratione at cupiditate quo nesciunt voluptatibus numquam eligendi. Deserunt magnam eaque laborum quia ipsa corrupti amet ab sequi totam iusto suscipit repudiandae adipisci ad vel minus asperiores necessitatibus vitae quam provident, voluptate excepturi voluptatibus nobis. Voluptatem, nam dolorem animi repellendus eligendi reiciendis aut, earum debitis temporibus totam dolor, blanditiis quidem sapiente iure ipsam autem architecto! Odio, dolorem nisi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor ke dua',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quo sed soluta, optio facilis fugiat molestias quis cupiditate delectus eum laborum iste necessitatibus exercitationem eius quia ducimus amet earum repellat sint illum. Hic quae, harum corrupti dolorem obcaecati sit aspernatur, amet sint ratione at cupiditate quo nesciunt voluptatibus numquam eligendi. Deserunt magnam eaque laborum quia ipsa corrupti amet ab sequi totam iusto suscipit repudiandae adipisci ad vel minus asperiores necessitatibus vitae quam provident, voluptate excepturi voluptatibus nobis. Voluptatem, nam dolorem animi repellendus eligendi reiciendis aut, earum debitis temporibus totam dolor, blanditiis quidem sapiente iure ipsam autem architecto! Odio, dolorem nisi.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor ke tiga',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quo sed soluta, optio facilis fugiat molestias quis cupiditate delectus eum laborum iste necessitatibus exercitationem eius quia ducimus amet earum repellat sint illum. Hic quae, harum corrupti dolorem obcaecati sit aspernatur, amet sint ratione at cupiditate quo nesciunt voluptatibus numquam eligendi. Deserunt magnam eaque laborum quia ipsa corrupti amet ab sequi totam iusto suscipit repudiandae adipisci ad vel minus asperiores necessitatibus vitae quam provident, voluptate excepturi voluptatibus nobis. Voluptatem, nam dolorem animi repellendus eligendi reiciendis aut, earum debitis temporibus totam dolor, blanditiis quidem sapiente iure ipsam autem architecto! Odio, dolorem nisi.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Programing',
            'slug' => 'programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
    }
}
