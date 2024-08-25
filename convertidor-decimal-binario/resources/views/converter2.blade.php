<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Decimal-Binario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Conversor Decimal-Binario</h1>
        <form action="{{ route('convert') }}" method="POST">
            @csrf
            <div class="converter">
                <label for="decimalInput">Número:</label>
                <input type="text" name="number" id="number" value="{{ old('number') }}" required>
                <label for="type">Tipo de Conversión:</label>
                <select name="type" id="type" required>
                    <option value="decimal" {{ (old('type') == 'decimal') ? 'selected' : '' }}>Decimal a Binario</option>
                    <option value="binary" {{ (old('type') == 'binary') ? 'selected' : '' }}>Binario a Decimal</option>
                </select>
                <button type="submit">Convertir</button>
            </div>
        </form>
        @if(isset($result))
        <div class="result">
            <p><strong>Resultado:</strong> {{ $result }}</p>
        </div>
        @endif
    </div>
</body>
</html>
