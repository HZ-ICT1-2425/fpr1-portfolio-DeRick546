<x-layout.main>
    <h1 class="title is-4">{{ $post->title }}</h1>
    <h2 class="subtitle is-6 is-italic">
        {!! $post->excerpt !!}
    </h2>
    <div>
        {!! $post->body !!}
    </div>
</x-layout.main>
