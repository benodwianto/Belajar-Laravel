<?php

namespace App\Models;

class Post_
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-Post-Pertama",
            "author" => "Bring",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, inventore aliquam dicta, soluta doloremque esse, molestias illo et aut fugiat nostrum dolore."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-Post-Kedua",
            "author" => "Brams",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nihil possimus blanditiis officiis quae, quidem repellat commodi expedita animi."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
