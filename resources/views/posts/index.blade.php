<x-layout.main>
    <h1 class="title is-4">Blog</h1>
    <h2 class="subtitle is-6 is-italic">
        Welcome to our blog, where productivity meets practicality! Dive into a
        world of efficiency and organization as we explore tips, tricks, and
        strategies to conquer your to-do list and elevate your productivity game.
    </h2>
    <div>
        <a href="{{ route('posts.create') }}" class="button is-primary">Create a New Blog Post</a>
    </div>
    @foreach($posts as $post)
        <x-post.list-item :post="$post"></x-post.list-item>
    @endforeach
</x-layout.main>
