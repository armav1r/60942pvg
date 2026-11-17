<!DOCTYPE html>
<html>
<head><title>Список изданий</title></head>
<body>
    <h2>Список изданий</h2>
    <table border="1">
        <tr><td>id</td><td>Наименование</td><td>Автор</td></tr>
        @foreach($editions as $edition)
            <tr>
                <td>{{ $edition->id }}</td>
                <td>{{ $edition->title }}</td>
                <td>{{ $edition->author }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>