@extends('layouts.app') <!-- Assuming you have a common layout named 'app' -->

@section('content')
    <div class="container">
        <h1>Scheduled tasks</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>task Title</th>
                    <th>Recipients</th>
                    <th>Frequency</th>
                    <th>Scheduled At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->task_title }}</td>
                        <td>{{ $task->recipients }}</td>
                        <td>{{ $task->frequency }}</td>
                        <td>{{ $task->send_at }}</td>
                        <td>
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('tasks.create') }}" class="btn btn-success">Create task</a>
    </div>
@endsection
