<x-layout.main>
    <h1 class="title is-4">
        {{ $task['title'] }}
    </h1>
    <div class="tags">
        <span class="tag has-text-weight-bold">
            {{ $task['state'] }}
        </span>
        <x-task.priority-tag :$task></x-task.priority-tag>
    </div>
    <div class="tags has-addons">
        <span class="tag">Time</span>
        <span class="tag has-text-weight-bold
                {{ $task['time_spent'] > $task['time_estimated'] ? 'has-text-danger' : '' }}">
                {{ $task['time_spent'] }}/{{ $task['time_estimated'] }}
            </span>
    </div>
    <x-ui.date-tag title="Created">{{ $task['created_at'] }}</x-ui.date-tag>
    <x-ui.date-tag title="Updated">{{ $task['updated_at'] }}</x-ui.date-tag>
    @if($task['completed_at'])
        <x-ui.date-tag title="Completed">{{ $task['completed_at'] }}</x-ui.date-tag>
    @endif
    <h2 class="subtitle is-6">
        {!! $task['description'] !!}
    </h2>
</x-layout.main>
