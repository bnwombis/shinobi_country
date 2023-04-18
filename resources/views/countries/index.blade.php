<div class="container">
    <div class="row">
        <div class="col-md-3">
            <form action="{{ route('countries.store') }}" method="POST">
                <div class="card m-1">
                    <div class="card-header"><h3>Add New Country</h3></div>
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="iso">ISO</label>
                            <input type="text" class="form-control" name="iso" id="iso" required>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-secondary">Save</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <div class="card m-1">
                <div class="card-header"><h3>List of countries</h3></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>ISO</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($countries as $country)
                            <tr>
                                <td>{{ $country->id }}</td>
                                <td>{{ $country->name }}</td>
                                <td>{{ $country->iso }}</td>
                                <td>
                                    <a href="{{ route('countries.edit', $country->id) }}"
                                       class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
