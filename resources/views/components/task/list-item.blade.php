<article class="media">
    <div class="media-left">
        <x-task.state-icon :$task></x-task.state-icon>
    </div>
    <div class="media-content">
        <div class="content">
            <a href="{{ route('tasks.show', $task['id']) }}">
                {{ $task['title'] }}
            </a>
            <span style="float: right">
            <div class="buttons">
                <a href="{{ route('tasks.edit', $task) }}" class="button is-primary">Edit &nbsp;<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z"/>
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg>
</a>
            <x-ui.modal name="delete" title="Confirm delete"
                        type="danger">
                <x-slot:trigger class="is-danger"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
</svg>
</x-slot:trigger>

                <form id="delete-project" method="POST" action="{{ route('tasks.destroy', $task) }}">
                    @csrf
                    @method('DELETE')
                    Click "Confirm" to delete this Task.
                    <br>
                    <strong>CAUTION!</strong> This action cannot be undone.
                </form>

                <x-slot:footer>
                    <div class="control">
                        <button type="submit" form="delete-project" class="button is-danger">Confirm</button>
                    </div>
                    <div class="control">
                        <button type="button" class="button is-light cancel">Cancel</button>
                    </div>
                </x-slot:footer>
            </x-ui.modal>
            </div>
            </span>

            <br>
            <div class="tags">
        <span class="tag has-text-weight-bold">
            {{ $task['state'] }}
        </span>
                <x-task.priority-tag :task="$task"></x-task.priority-tag>
            </div>

        </div>
    </div>
    <div class="media-right">
    </div>
</article>
