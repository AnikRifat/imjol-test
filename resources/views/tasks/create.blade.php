@extends('layouts.app') <!-- Assuming you have a common layout named 'app' -->

@section('content')
    <div class="container">
        <h1>Create Scheduled Task</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf <!-- CSRF Token -->

            <div class="form-group">
                <label for="task_title">Task Title</label>
                <input type="text" class="form-control" id="task_title" name="task_title" value="{{ old('task_title') }}"
                    required>
            </div>

            <div class="form-group">
                <label for="task_content">Task Content</label>
                <textarea class="form-control" id="task_content" name="task_content" rows="4" required>{{ old('task_content') }}</textarea>
            </div>

            <div class="form-group">
                <label for="recipients">Recipients (comma-separated email addresses)</label>
                <input type="text" class="form-control" id="recipients" name="recipients" value="{{ old('recipients') }}"
                    required>
            </div>

            <div class="form-group">
                <label for="frequency">Scheduling Frequency</label>
                <select class="form-control" id="frequency" name="frequency" required>
                    <option value="daily">Daily</option>
                    <option value="weekly">Weekly</option>
                    <option value="monthly">Monthly</option>
                </select>
            </div>

            <div class="form-group">
                <label for="send_at">Scheduled Time</label>
                <input type="time" class="form-control" id="send_at" name="send_at" value="{{ old('send_at') }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Create Task</button>
        </form>
    </div>
@endsection
