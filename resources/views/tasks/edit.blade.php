@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Scheduled Task</h1>
        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" name="task_title" id="title" class="form-control" value="{{ $task->task_title }}"
                    required>
            </div>
            <div class="form-group">
                <label for="content">Task Content</label>
                <textarea name="task_content" id="task_content" class="form-control" rows="5" required>{{ $task->task_content }}</textarea>
            </div>
            <div class="form-group">
                <label for="recipients">Recipients (comma-separated email addresses)</label>
                <input type="text" name="recipients" id="recipients" class="form-control" value="{{ $task->recipients }}"
                    required>
            </div>
            <div class="form-group">
                <label for="frequency">Scheduling Frequency</label>
                <select name="frequency" id="frequency" class="form-control" required>
                    <option value="daily" {{ $task->frequency === 'daily' ? 'selected' : '' }}>Daily</option>
                    <option value="weekly" {{ $task->frequency === 'weekly' ? 'selected' : '' }}>Weekly</option>
                    <option value="monthly" {{ $task->frequency === 'monthly' ? 'selected' : '' }}>Monthly</option>
                </select>
            </div>
            <div class="form-group">
                <label for="send_at">Time to Send Task</label>
                <input type="time" name="send_at" id="send_at" class="form-control"
                    value="{{ date('H:i', strtotime($task->send_at)) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
    </div>
@endsection
