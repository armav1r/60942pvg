<!DOCTYPE html>
<html>
<head>
    <title>Добавление экземпляра</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
    <h2>Добавление экземпляра</h2>
    <form method="post" action="{{ url('copy') }}">
        @csrf
        <label>Издание:</label>
        <select name="edition_id">
            <option value="">Выберите издание</option>
            @foreach ($editions as $edition)
                <option value="{{ $edition->id }}" @if(old('edition_id') == $edition->id) selected @endif>
                    {{ $edition->title }} ({{ $edition->author }})
                </option>
            @endforeach
        </select>
        @error('edition_id')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br><br>

        <label>Коэффициент износа (0.00 - 1.00):</label>
        <input type="text" name="wear_factor" value="{{ old('wear_factor') }}">
        @error('wear_factor')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br><br>

        <input type="submit" value="Сохранить">
    </form>
</body>
</html>