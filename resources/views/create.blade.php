@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-5 mx-auto">
            <h1>Create Official</h1>
            {{-- @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif --}}
            <form action="{{ route('officials.store') }}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="position">Position</label>
                    <input type="text" name="position" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <label for="image">Image URL</label>
                    <input type="text" name="image" class="form-control" required>
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary">Add Official</button>
                </div>
            </form>
        </div>
    </div>
@endsection
