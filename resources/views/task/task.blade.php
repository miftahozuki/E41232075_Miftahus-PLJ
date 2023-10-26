<!-- resources/views/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tugas Baru</title>
</head>
<body>
    <h1>Tambah Tugas Baru</h1>
    <form action="/task" method="post">
        @csrf
        
        <label for="title">Judul Tugas:</label>
        <input type="text" name="title">
        <button type="submit">Tambahkan Tugas</button>
    </form>
</body>
</html>
