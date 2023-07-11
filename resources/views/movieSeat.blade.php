<!DOCTYPE html>
<html>
<head>
    <title>Sala de Cine - Compra de Boletos</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{ asset('css/movieSeat.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <style>
        /* Estilos CSS para la presentación */
        
    </style>
</head>
<body>
    <div class="container">
            <div class="seating-plan-container">
                <table class="seating-plan">
                    @php
                        $filas = 8;
                        $columnas = 8;
                    @endphp
                    @foreach (range('A', 'H') as $letra)
                        <tr>
                            @foreach (range(1, $columnas) as $numero)
                                @php
                                    $asiento = $letra . $numero;
                                @endphp
                                <td>
                                    <button type="button" id="{{ $asiento }}" class="available" onclick="toggleSeat(this)">
                                        {{ $asiento }}
                                    </button>
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            </div>

            <input type="submit" value="Comprar">
        </form>
    </div>

    <script>
        function toggleSeat(button) {
            button.classList.toggle('selected');
        }
    </script>
</body>
</html>