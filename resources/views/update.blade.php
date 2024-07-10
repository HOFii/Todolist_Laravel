@extends('layouts.main')
@push('head')
    <title>Update Todo</title>
@endpush

@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between alignt-items-center my-5">
            <div class="h2">Update Todo</div>
            <a href="" class="btn btn-primary btn-lg">Back</a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('todo.updateData') }}" method="post">
                    @csrf
                    <label for="form-label">Name</label>
                    <input type="text" name="name" id="" class="form-control mt-4"
                        value="{{ $todo->name }}">
                    <label for="form-label">Todo</label>
                    <input type="text" name="todo" id="" class="form-control mt-4"
                        value="{{ $todo->todo }}">
                    <label for="form-label">Date</label>
                    <input type="date" name="date" id="" class="form-control mt-4"
                        value="{{ $todo->date }}">
                    <input type="number" name="id" value="{{ $todo->id }}" id="" hidden>
                    <button class="btn btn-primary btn-lg mt-4">Update</button>
                </form>
            </div>
        </div>

    </div>
@endsection
