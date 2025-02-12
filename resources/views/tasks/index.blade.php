<x-layout.main>
    <h1 class="title is-4">Tasks manager</h1>
    <h2 class="subtitle is-6 is-italic">
        Welcome to our task manager, where productivity meets practicality! Dive into a
        world of efficiency and organization as we explore tips, tricks, and
        strategies to conquer your to-do list and elevate your productivity game.
    </h2>
    <div>
        <a href="{{ route('tasks.create') }}" class="button is-primary">Create a New Blog Post</a>
    </div>
    @foreach($tasks as $task)
        <x-task.list-item :task="$task"></x-task.list-item>
    @endforeach
</x-layout.main>
