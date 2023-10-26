<!-- resources/views/tasks.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tugas</title>
</head>
<body>
    <h1>Daftar Tugas</h1>
    <ul>
        @foreach ($tasks as $task)
            <p>{{ $task->title }}</p>
        @endforeach
    </ul>
</body>
</html>
