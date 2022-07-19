<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <legend>pemesanan</legend>
    @if($a == null)
    <strong>{{$a}}</strong>
    @elseif($a == 'mie goreng')
    Makanan : <strong>{{$a}}</strong> <br>
    Harga : Rp.5000
    @elseif($a == 'seblak')
    Makanan : <strong>{{$a}}</strong> <br>
    Harga : Rp.7500
    @elseif($a == 'nasi pdang')
    Makanan : <strong>{{$a}}</strong> <br>
    Harga : Rp.15000
    @else
    Makanan : <strong>{{$a}}</strong>
    @endif
    <hr>

    @if($b == null)
    <strong>{{$b}}</strong>
    @elseif($b == 'kopi')
    Minuman : <strong>{{$b}}</strong> <br>
    Harga : Rp.5000
    @elseif($b == 'jus')
    Minuman : <strong>{{$b}}</strong> <br>
    Harga : Rp.7500
    @elseif($b == 'teh')
    Minuman : <strong>{{$b}}</strong> <br>
    Harga : Rp.15000
    @else
    Makanan : <strong>{{$b}}</strong>
    @endif
    <hr>

    @if($c == null)
    <strong>{{$c}}</strong>
    @elseif($c == 'kecil')
    Porsi : <strong>{{$c}}</strong> <br>
    Harga : Rp.5000
    @elseif($c == ' sedang')
    Porsi : <strong>{{$c}}</strong> <br>
    Harga : Rp.7500
    @elseif($c == 'besar')
    Porsi : <strong>{{$c}}</strong> <br>
    Harga : Rp.15000
    @else
    Porsi : <strong>{{$c}}</strong>
    @endif
    <hr>
</body>
</html>