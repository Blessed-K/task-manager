@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-semibold">My Tasks</h2>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ New Task</a>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">{{ $message }}</div>
@endif

<div class="card p-3">
    <table class="table align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th></th>
                <th>Title</th>
                <th>Description</th>
                <th width="220">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tasks as $task)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <form action="{{ route('tasks.toggle', $task->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="checkbox" name="is_completed" onchange="this.form.submit()" {{ $task->is_completed ? 'checked' : '' }}>
                    </form>
                </td>
                <td class="fw-semibold {{ $task->is_completed ? 'text-decoration-line-through text-muted' : '' }}">{{ $task->title }}</td>
                <td class="{{ $task->is_completed ? 'text-muted' : '' }}">{{ $task->description }}</td>
                <td>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger"
                            onclick="return confirm('Delete this task?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center text-muted py-4">No tasks yet. Create one above.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
