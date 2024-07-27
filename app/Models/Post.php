<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'yogiyendri',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis iste omnis fugiat voluptatibus soluta excepturi blanditiis eius, necessitatibus saepe maiores libero totam sequi, repudiandae adipisci reiciendis commodi iusto. Eaque, officiis! Pariatur dolorum, minus iste quia optio sint nemo in obcaecati voluptatem earum labore perspiciatis exercitationem. Modi, velit minus quisquam sequi tenetur ab iste reprehenderit nisi, inventore sit recusandae, cupiditate tempora. Incidunt saepe, alias pariatur repudiandae, ab obcaecati debitis dolorem nemo nobis rerum quasi praesentium dolores itaque expedita reiciendis id doloremque facere impedit ad laudantium! Maxime accusamus molestiae quaerat? Eaque, sed.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'yogiyendri',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod similique, voluptatem assumenda ipsum odit ab tempore dolorem cupiditate totam mollitia nam ratione maiores, iusto, veritatis cumque reprehenderit expedita accusamus deserunt? Quidem, quam. Ipsum deleniti reprehenderit ut suscipit voluptatem error, quasi cupiditate cum ipsam optio sint, laudantium, quam beatae minima facere! Quidem facilis minus nesciunt delectus non nemo doloribus eum assumenda. Alias culpa cupiditate corporis, ipsam quisquam aliquam ex dolore nisi aspernatur, id ab unde vel totam tenetur repudiandae perspiciatis dicta quo asperiores ad quia cum! Laudantium vel recusandae laborum voluptatum.'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
