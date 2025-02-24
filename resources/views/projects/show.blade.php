<x-layout.main>
    <div class="navbar">
        <div class="navbar-start">
            <h1 class="title is-4">
                {{ $project->title }}
            </h1>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="{{ route('projects.edit', $project) }}" class="button is-primary">Edit</a>
                    <x-ui.modal name="delete" title="Confirm delete"
                                type="danger">
                        <x-slot:trigger class="is-danger">Delete</x-slot:trigger>

                        <form id="delete-project" method="POST" action="{{ route('projects.destroy', $project) }}">
                            @csrf
                            @method('DELETE')
                            Click "Confirm" to delete this FAQ.
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
            </div>
        </div>
    </div>
    <h2 class="subtitle is-6">
        {!! $project->description !!}
    </h2>
</x-layout.main>
