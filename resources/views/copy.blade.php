<!DOCTYPE html>
<html>
<head><title>Экземпляр</title></head>
<body>
    <h2>{{ $copy ? "Экземпляр №" . $copy->id : "Неверный ID" }}</h2>
    @if($copy)
        <p>Коэффициент износа: {{ $copy->wear_factor }}</p>
        <p>Издание: <b>{{ $copy->edition->title }}</b> (Автор: {{ $copy->edition->author }})</p>
    @endif
</body>
</html>