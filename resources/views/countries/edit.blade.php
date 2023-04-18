<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Country') }}
        </h2>
    </x-slot>
    <div class="container">
        <form action="{{ route('countries.update', $country->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">


                    <div class="card m-1 col-md-5">
                        <div class="card-header">
                            <h3>Country</h3>
                        </div>
                        <div class="card-body">


                            <div class="form-group">
                                <label for="name">Country Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="{{ $country->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="iso">Country ISO code</label>
                                <input type="text" class="form-control" name="iso" id="iso" value="{{ $country->iso }}"
                                       required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>


                            <a  class="btn btn-danger"
                                    onclick="submitDeleteForm()">Delete
                            </a>

                            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        function submitDeleteForm() {
            if (confirm('Are you sure you want to delete this country?')) {
                document.getElementById('delete-form').submit();
            }
        }
    </script>
    <form id="delete-form" action="{{ route('countries.destroy', $country->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
    </form>
</x-app-layout>