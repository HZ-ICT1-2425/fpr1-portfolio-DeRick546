<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    private $data = [
        [
            'title' => 'Programming Tips for Beginners',
            'excerpt' => 'Learn how to <strong>get started</strong> with programming.',
            'body' => '<p>Programming is a valuable skill that can open up many opportunities. Whether you want to build <strong>software</strong>, develop websites, or work on <strong>data analysis</strong>, programming is a versatile tool.</p>
     <p>For beginners, it can be a bit overwhelming, but with the right guidance, you can quickly grasp the <strong>basics</strong>. Start with a simple language like <strong>Python</strong> and work on small projects to build your skills.</p>
     <p>As you progress, you can explore more advanced topics like <strong>algorithms</strong>, <strong>data structures</strong>, and software <strong>design</strong>. The journey of programming is both challenging and rewarding.</p>'
        ],
        [
            'title' => 'Web Development Best Practices',
            'excerpt' => 'Master the art of <strong>web development</strong>.',
            'body' => '<p><strong>Web development</strong> is an ever-evolving field with a wide range of technologies and practices. To create successful websites and web applications, developers need to follow <strong>best practices</strong>.</p>
     <p>Key aspects of <strong>web development</strong> include front-end and back-end development, <strong>responsive design</strong>, <strong>performance optimization</strong>, and <strong>security</strong>. Staying updated with the latest trends and tools is crucial for success.</p>
     <p>In this blog post, we will dive into the essential <strong>best practices</strong> that every web developer should be aware of and incorporate into their work.</p>'
        ],
        [
            'title' => 'Python: A Versatile Language',
            'excerpt' => 'Explore the power of <strong>Python</strong> programming.',
            'body' => '<p><strong>Python</strong> is a versatile programming language known for its simplicity and flexibility. It has gained popularity in various fields, including <strong>web development</strong>, <strong>data science</strong>, and <strong>automation</strong>.</p>
     <p>With its clear and readable syntax, <strong>Python</strong> is an excellent choice for beginners. You can use it to create web applications, analyze <strong>data</strong>, build machine learning models, and much more.</p>
     <p>This blog post will introduce you to the world of <strong>Python</strong> and highlight some of its key features and use cases.</p>'
        ],

        [
            'title' => 'Software Development Lifecycle',
            'excerpt' => 'Understanding the stages of <strong>software development</strong>.',
            'body' => '<p>The software development lifecycle encompasses <strong>planning</strong>, <strong>development</strong>, <strong>testing</strong>, and more. It is a structured process that ensures software projects are completed successfully.</p>
     <p>Understanding each stage of the <strong>software development</strong> lifecycle is crucial for developers and project managers. This blog post will break down the key phases and their importance in delivering high-quality <strong>software products</strong>.</p>'
        ],

    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->data as $item) {
            Post::create($item);
        }
    }
}
