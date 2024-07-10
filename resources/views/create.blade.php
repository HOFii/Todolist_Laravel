@extends('layouts.main')
@push('head')
    <title>Add Todo</title>
@endpush

@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between alignt-items-center my-5">
            <div class="h2">Add Todo</div>
            <a href="{{ route('todo.home') }}" class="btn btn-primary btn-lg">Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('todo.store') }}" method="post">
                    @csrf
                    <label for="form-label">Name</label>
                    <input type="text" name="name" id="" class="form-control mt-1">
                    <div class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="form-label">Todo</label>
                    <input type="text" name="todo" id="" class="form-control mt-1">
                    <div class="text-danger">
                        @error('todo')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="form-label">Date</label>
                    <input type="date" name="date" id="" class="form-control mt-1">
                    <div class="text-danger">
                        @error('date')
                            {{ $message }}
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-lg mt-4">Add Todo</button>
                </form>
            </div>
        </div>

    </div>
@endsection
