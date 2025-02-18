<x-layout.main>
    <div class="navbar mb-3">
        <div class="navbar-start">
            <div class="block">
                <h1 class="title is-4">Tasks</h1>
                <h2 class="subtitle is-6 is-italic">
                    Welcome to our tasks, where productivity meets practicality! Dive into a
                    world of efficiency and organization as we explore tips, tricks, and
                    strategies to conquer your to-do list and elevate your productivity game.
                </h2>
            </div>
        </div>
        <div class="navbar-end">
            <a href="{{ route('tasks.create') }}" class="button is-primary">Create a New Task</a>
        </div>
    </div>
        @foreach($tasks as $task)
            <x-task.list-item :task="$task"></x-task.list-item>
        @endforeach
</x-layout.main>


