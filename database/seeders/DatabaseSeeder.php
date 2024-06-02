<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Reza Subagja',
        //     'email' => 'rejabagja@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        // User::create([
        //     'name' => 'Opiana',
        //     'email' => 'vanopiana@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, illum assumenda amet alias nostrum exercitationem saepe nobis quod consequuntur?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, illum assumenda amet alias nostrum exercitationem saepe nobis quod consequuntur? Modi, et harum non nemo mollitia facere numquam ipsam voluptatibus voluptas dolorum soluta illo, distinctio quod natus praesentium vitae atque dignissimos nisi suscipit neque tempora reprehenderit. Maiores provident animi eveniet tenetur illum quia incidunt deserunt qui consectetur fugit dolor dicta perspiciatis rem ad, saepe tempora iusto! Porro, nihil est, accusantium quis quod unde quia facere quae ex excepturi autem enim asperiores voluptates aut soluta expedita ab deleniti perspiciatis nulla nemo minima corporis vel molestias odit. Esse necessitatibus quas vitae nulla qui.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, illum assumenda amet alias nostrum exercitationem saepe nobis quod consequuntur?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, illum assumenda amet alias nostrum exercitationem saepe nobis quod consequuntur? Modi, et harum non nemo mollitia facere numquam ipsam voluptatibus voluptas dolorum soluta illo, distinctio quod natus praesentium vitae atque dignissimos nisi suscipit neque tempora reprehenderit. Maiores provident animi eveniet tenetur illum quia incidunt deserunt qui consectetur fugit dolor dicta perspiciatis rem ad, saepe tempora iusto! Porro, nihil est, accusantium quis quod unde quia facere quae ex excepturi autem enim asperiores voluptates aut soluta expedita ab deleniti perspiciatis nulla nemo minima corporis vel molestias odit. Esse necessitatibus quas vitae nulla qui.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, illum assumenda amet alias nostrum exercitationem saepe nobis quod consequuntur?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, illum assumenda amet alias nostrum exercitationem saepe nobis quod consequuntur? Modi, et harum non nemo mollitia facere numquam ipsam voluptatibus voluptas dolorum soluta illo, distinctio quod natus praesentium vitae atque dignissimos nisi suscipit neque tempora reprehenderit. Maiores provident animi eveniet tenetur illum quia incidunt deserunt qui consectetur fugit dolor dicta perspiciatis rem ad, saepe tempora iusto! Porro, nihil est, accusantium quis quod unde quia facere quae ex excepturi autem enim asperiores voluptates aut soluta expedita ab deleniti perspiciatis nulla nemo minima corporis vel molestias odit. Esse necessitatibus quas vitae nulla qui.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, illum assumenda amet alias nostrum exercitationem saepe nobis quod consequuntur?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, illum assumenda amet alias nostrum exercitationem saepe nobis quod consequuntur? Modi, et harum non nemo mollitia facere numquam ipsam voluptatibus voluptas dolorum soluta illo, distinctio quod natus praesentium vitae atque dignissimos nisi suscipit neque tempora reprehenderit. Maiores provident animi eveniet tenetur illum quia incidunt deserunt qui consectetur fugit dolor dicta perspiciatis rem ad, saepe tempora iusto! Porro, nihil est, accusantium quis quod unde quia facere quae ex excepturi autem enim asperiores voluptates aut soluta expedita ab deleniti perspiciatis nulla nemo minima corporis vel molestias odit. Esse necessitatibus quas vitae nulla qui.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
