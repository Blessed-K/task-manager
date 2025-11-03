<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white p-4 rounded-xl shadow">
        <h1 class="text-2xl font-bold mb-4">My Tasks</h1>

        <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-3 py-2 rounded">+ Add Task</a>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-2 mt-2 rounded">{{ session('success') }}</div>
        @endif

        <ul class="mt-4 space-y-2">
            @forelse ($tasks as $task)
                <li class="flex justify-between items-center bg-gray-50 p-3 rounded">
                    <div>
                        <strong>{{ $task->title }}</strong>
                        <p class="text-sm text-gray-600">{{ $task->description }}</p>
                    </div>
                    <div>
                        <a href="{{ route('tasks.edit', $task) }}" class="text-blue-500 mr-2">Edit</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button class="text-red-500">Delete</button>
                        </form>
                    </div>
                </li>
            @empty
                <li class="text-gray-500">No tasks yet.</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
