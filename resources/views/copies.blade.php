<!DOCTYPE html>
<html>
<head><title>Список экземпляров</title></head>
<body>
    <h2>Список экземпляров</h2>
    <table border="1">
        <tr><td>id</td><td>id_издания</td><td>Износ</td></tr>
        @foreach($copies as $copy)
            <tr>
                <td>{{ $copy->id }}</td>
                <td>{{ $copy->edition_id }}</td>
                <td>{{ $copy->wear_factor }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>