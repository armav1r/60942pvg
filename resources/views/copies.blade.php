<!DOCTYPE html>
<html>
<head><title>Список экземпляров</title></head>
<body>
    <h2>Список экземпляров</h2>
    <a href="{{ url('/copy/create') }}">Добавить экземпляр</a>
    <br><br>
    <table border="1">
        <tr>
            <td>id</td>
            <td>Издание</td>
            <td>Коэффициент износа</td>
            <td>Действия</td>
        </tr>
        @foreach($copies as $copy)
            <tr>
                <td>{{ $copy->id }}</td>
                <td>{{ $copy->edition->title }}</td>
                <td>{{ $copy->wear_factor }}</td>
                <td>
                    <a href="{{ url('/copy/edit/'.$copy->id) }}">Редактировать</a> | 
                    <a href="{{ url('/copy/destroy/'.$copy->id) }}">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>