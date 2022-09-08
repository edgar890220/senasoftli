<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../resources/css/stylescards.css">
    <title>Cards Game for Beginners | Javascript - Truzz Blogg</title>
</head>
<body>
    <div class="container">
        <button id="btn" class="btn" onclick="displayCard()">BARAJAR</button>
        <p id="showing"></p>
        <p id="elemento" style="width: 30%", style="size:40px"></p>
        <p id="numero" style="width: 30%", style="size:40px"></p>

        </div>


          <table class="table col-12 table-responsive">

            <tbody>
                <center><select name="" id="">
                    <option value="">seleccione su nombre</option>
                    @foreach ($jugadors as $jugador)
                        <option value="">{{$jugador->nombre}}</option>
                    @endforeach
                </select>


            </tbody>
          </table>
    </div>


    <script src="../resources/js/script.js"></script>
</body>
</html>
