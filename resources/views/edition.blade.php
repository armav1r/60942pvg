<!DOCTYPE html>
<html>
<head><title>Издание</title></head>
<body>
    <h2>{{ $edition ? "Издание: " . $edition->title : "Неверный ID" }}</h2>
    @if($edition)
        <p>Автор: {{ $edition->author }}</p>
        <h3>Экземпляры:</h3>
        <table border="1">
            <tr><td>ID экземпляра</td><td>Коэффициент износа</td></tr>
            @foreach($edition->copies as $copy)
                <tr>
                    <td>{{ $copy->id }}</td>
                    <td>{{ $copy->wear_factor }}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>