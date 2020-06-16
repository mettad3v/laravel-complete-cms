<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Post;
use App\Category;
use App\Tag;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $category1 = Category::create([
            'name' => 'News'
        ]);

        $author1 = User::create([
            'name' => 'John Doe',
            'email' => 'john@Doe.com',
            'password' => Hash::make('password')
        ]);

        $author2 = User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@Doe.com',
            'password' => Hash::make('password')
        ]);

        $category2 = Category::create([
            'name' => 'Marketing'
        ]);

        $category3 = Category::create([
            'name' => 'Partnership'
        ]);

        $post1 = $author2->posts()->create([
            'title' => 'Office relocation',
            'description' => 'We relocated our office',
            'content' => 'We relocated our office to a new designed garage',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg'
        ]);

        $post2 = $author1->posts()->create([
            'title' => 'Top 5 most played games 2020',
            'description' => 'We relocated our office',
            'content' => 'We relocated our office to a new designed garage',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg'
        ]);

        $post3 = $author2->posts()->create([
            'title' => 'Best practice for vueX with examples',
            'description' => 'We relocated our office',
            'content' => 'We relocated our office to a new designed garage',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg'
        ]);

        $post4 = $author1->posts()->create([
            'title' => 'Don\'t use all your muscles, only those you want to keep',
            'description' => 'We relocated our office',
            'content' => 'We relocated our office to a new designed garage',
            'category_id' => $category1->id,
            'image' => 'posts/4.jpg'
        ]);
        
        $tag1 = Tag::create([
            'name' => 'Exercise'
        ]);

        $tag2 = Tag::create([
            'name' => 'VueX'
        ]);

        $tag3 = Tag::create([
            'name' => 'Office'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag1->id, $tag3->id]);
    }
}
