<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Decimal-Binario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Estilos para la página */
        body {
            background-image: url('{{ asset('images/MoonKinght.png') }}'); /* Fondo con imagen de la universidad */
            background-size: 130%; /* Ajusta el tamaño de la imagen (más pequeño) */
            background-position: center; /* Centrar la imagen */
            background-repeat: no-repeat; /* No repetir la imagen */
            color: #333; /* Color de texto */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco con transparencia */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 100px auto;
            max-width: 600px;
            padding: 30px;
            text-align: center;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header img {
            width: 100px; /* Ancho de la imagen del membrete */
        }
        .header .info {
            text-align: right;
        }
        .header .info p {
            margin: 0;
        }
        h1 {
            color: #003366; /* Azul oscuro */
        }
        .converter {
            margin-top: 20px;
        }
        .converter label, .converter select, .converter input {
            display: block;
            margin: 10px auto;
            width: 80%;
        }
        .converter button {
            background-color: #003366; /* Azul oscuro */
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .converter button:hover {
            background-color: #00509e; /* Azul más claro */
        }
        .result {
            margin-top: 20px;
            background-color: #f0f0f0; /* Fondo gris claro */
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Encabezado con membrete e información -->
        <div class="header">
            <img src="{{ asset('images/Imagendeumg.png') }}" alt="Logo Universidad">
            <div class="info">
                <p>Anthony Edyn Amado Guadron Mauricio</p>
                <p>Carnet: 8590-20-19181</p>
            </div>
        </div>

        <h1>Conversor Texto-Decimal-Binario</h1>

        <form action="{{ route('convert') }}" method="POST">
            @csrf
            <div class="converter">
                <label for="number">Ingrese el valor a convertir:</label>
                <input type="text" name="number" id="number" value="{{ old('number') }}" required>
                <label for="type">Tipo de Conversión:</label>
                <select name="type" id="type" required>
                    <option value="decimal" {{ (old('type') == 'decimal') ? 'selected' : '' }}>Decimal a Binario</option>
                    <option value="binary" {{ (old('type') == 'binary') ? 'selected' : '' }}>Binario a Decimal</option>
                    <option value="textToBinary" {{ (old('type') == 'textToBinary') ? 'selected' : '' }}>Texto a Binario</option>
                    <option value="binaryToText" {{ (old('type') == 'binaryToText') ? 'selected' : '' }}>Binario a Texto</option>
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
