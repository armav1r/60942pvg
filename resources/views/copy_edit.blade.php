<!DOCTYPE html>
<html>
<head>
    <title>Редактирование экземпляра</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
    <h2>Редактирование экземпляра №{{ $copy->id }}</h2>
    <form method="post" action="{{ url('copy/update/'.$copy->id) }}">
        @csrf
        <label>Издание:</label>
        <select name="edition_id">
            @foreach ($editions as $edition)
                <option value="{{ $edition->id }}" 
                    @if(old('edition_id') == $edition->id) 
                        selected 
                    @elseif($copy->edition_id == $edition->id) 
                        selected 
                    @endif
                >
                    {{ $edition->title }}
                </option>
            @endforeach
        </select>
        @error('edition_id')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br><br>

        <label>Коэффициент износа:</label>
        <input type="text" name="wear_factor" value="@if(old('wear_factor')){{ old('wear_factor') }}@else{{ $copy->wear_factor }}@endif">
        @error('wear_factor')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br><br>

        <input type="submit" value="Обновить">
    </form>
</body>
</html>