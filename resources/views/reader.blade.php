<!DOCTYPE html>
<html>
<head><title>Читатель</title></head>
<body>
    <h2>{{ $reader ? "Читатель: " . $reader->full_name : "Неверный ID" }}</h2>
    @if($reader)
        <h3>Взятые книги:</h3>
        <table border="1">
            <tr>
                <td>ID экземпляра</td>
                <td>Название</td>
                <td>Дата выдачи</td>
                <td>План возврата</td>
                <td>Факт возврата</td>
            </tr>
            @foreach($reader->copies as $copy)
                <tr>
                    <td>{{ $copy->id }}</td>
                    <td>{{ $copy->edition->title }}</td>
                    <!-- Данные из pivot-таблицы (loans) -->
                    <td>{{ $copy->pivot->loan_date }}</td>
                    <td>{{ $copy->pivot->planned_return_date }}</td>
                    <td>{{ $copy->pivot->actual_return_date ?? 'Не возвращена' }}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>