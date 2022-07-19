<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Data siswa
        </legend>
        @foreach ($siswa as $murid)
                nama : {{$murid['name']}}<br>
                umur :{{$murid['age']}}<br>
                status : @if ($murid['age']>17)
                Sudah Bisa Memiliki sim <br>
                @else
                Belum Bisa Memiliki sim <br>
                @endif
                <br>
                hobi :
                @foreach($murid['hobi'] as $hobi)
                <li>{{$hobi}}</li>
                    
                @endforeach
                <hr>
        @endforeach
    </fieldset>
</body>
</html>