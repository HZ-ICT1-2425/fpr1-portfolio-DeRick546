<x-layout.main>

    <div class="box">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <h1 class="title is-4">Create a New Task</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please fill out all the form fields and click 'Submit'
            </h2>

            {{-- Here are all the form fields --}}
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" name="title" class="input" autofocus>
                </div>
            </div>

            <div class="field">
                <label for="description" class="label">Description</label>
                <div class="control">
                    <input type="text" name="description" class="input">
                </div>
            </div>

            <div class="field">
                <label for="priority" class="label">Priority</label>
                <div class="control">
                    <input type="number" name="priority" class="input">
                </div>
            </div>

            <div class="field">
                <label for="state" class="label">State</label>
                <div class="control">
                    <input type="text" name="state" class="input">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</x-layout.main>
