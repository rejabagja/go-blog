<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Reza Subagja",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti voluptate, ex vel assumenda facilis harum libero placeat quos explicabo accusamus ducimus dolorem quae tempore soluta natus ab iure nam iusto alias quaerat dignissimos porro, consequatur autem. Ducimus iure molestias aliquid perferendis voluptatem ad totam soluta aliquam consectetur porro animi officiis, dolor, saepe dolores magnam consequuntur maxime atque. Commodi labore itaque autem veniam omnis. Non voluptate quo consequuntur illo, iure cupiditate sequi veniam magni ipsa nesciunt, exercitationem ex voluptas quisquam minima?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Opiana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quasi odio beatae repellendus rerum, cupiditate dolores, ipsa alias aliquam sint aspernatur atque, soluta quos reiciendis maiores totam? Perspiciatis culpa totam porro, quasi consequatur quod ducimus, nobis mollitia quos voluptas libero quibusdam inventore fugiat ipsa voluptates minus sit fugit veniam, officiis nam explicabo similique tempora itaque? Sapiente possimus autem hic maiores sed adipisci facere ab laboriosam excepturi tempora nesciunt distinctio voluptatem doloribus dolore exercitationem, fugit delectus earum similique! Natus in minima excepturi, quasi omnis nulla? Aliquam cupiditate excepturi, eveniet aut tenetur, aperiam, reiciendis corrupti porro velit cumque rerum illum deserunt libero?"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts); // collection array
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
