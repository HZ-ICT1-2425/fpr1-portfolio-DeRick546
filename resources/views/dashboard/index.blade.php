<x-layout.main>
    <div class="navbar mb-3">
        <div class="navbar-start">
            <div class="block">
                <table class="table" style="width: 120%">
                    <thead>
                    <tr>
                        <th>Block</th>
                        <th>Course </th>
                        <th>assignment </th>
                        <th>grade </th>
                        <th>Credits</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dashboards as $dashboard)
                        <tr>
                            <th> {{ $dashboard->block }}</th>
                            <td> {{ $dashboard->course }}</td>
                            <th> {{ $dashboard->assessment }}</th>
                            <th>
                                @if(empty($dashboard->grade))
                                    <form action="{{ route('dashboard.update', $dashboard) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="field">
                                            <label for="grade" class="label">Grade:</label>
                                            <div class="control has-icons-right is-flex">
                                                <input type="number" step="0.1" name="grade" placeholder="Enter new grade..."
                                                       class="input @error('grade') is-danger @enderror"
                                                       value="{{ old('grade') }}" required>

                                                <button type="submit" class="button is-success ml-2">Save</button>

                                                @error('grade')
                                                <span class="icon has-text-danger is-small is-right">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    {{ $dashboard->grade }}
                                @endif
                            </th>
                            <th> {{ $dashboard->credits }}</th>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th colspan="5" class="has-text-centered">
                            <p class="button is-danger">NBSA: 45EC min en propedeuse: 60EC max</p>
                        </th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-layout.main>
