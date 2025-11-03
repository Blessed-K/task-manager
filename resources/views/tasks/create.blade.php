@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-semibold mb-0">Create New Task</h2>
    <a href="{{ route('tasks.index') }}" class="btn btn-outline-secondary">← Back</a>
</div>

<div class="card p-4 mx-auto" style="max-width: 600px;">
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Please fix the errors below:
            <ul class="mt-2 mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-semibold">Title</label>
            <input type="text" name="title" class="form-control form-control-lg"
                value="{{ old('title') }}" placeholder="e.g. Complete portfolio project" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Description</label>
            <textarea name="description" rows="4" class="form-control"
                placeholder="Add details about the task..." required>{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary px-4 py-2">Save Task</button>
    </form>
</div>
@endsection
