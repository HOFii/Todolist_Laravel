@extends('layouts.main')
@push('head')
    <title>Todo List App</title>
@endpush

@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between alignt-items-center my-5">
            <div class="h2">All Todos</div>
            <a href="{{ route('todo.create') }}" class="btn btn-primary btn-lg">Add Todo</a>
        </div>
        <table class="table table-stripped table-dark">
            <tr>
                <th>Name</th>
                <th>Todo</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            @foreach ($todos as $todo)
                <tr valign='middle'>
                    <td>{{ $todo->name }}</td>
                    <td>{{ $todo->todo }} </td>
                    <td>{{ $todo->date }}</td>
                    <td>
                        <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-success btn-sm">Update</a>
                        <a href="{{ route('todo.delete', $todo->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
