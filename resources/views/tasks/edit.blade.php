<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto bg-white p-4 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Edit Task</h1>
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf @method('PUT')
            <input type="text" name="title" value="{{ $task->title }}" class="border p-2 w-full mb-2">
            <textarea name="description" class="border p-2 w-full mb-2">{{ $task->description }}</textarea>
            <button class="bg-blue-500 text-white px-3 py-2 rounded">Update</button>
        </form>
    </div>
</body>
</html>
