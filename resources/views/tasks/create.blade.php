<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto bg-white p-4 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Add Task</h1>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Task title" class="border p-2 w-full mb-2">
            <textarea name="description" placeholder="Description" class="border p-2 w-full mb-2"></textarea>
            <button class="bg-blue-500 text-white px-3 py-2 rounded">Save</button>
        </form>
    </div>
</body>
</html>
