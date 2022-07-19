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
        <legend>TOKO SELAMAT</legend>
        @foreach($shop as $shop)
        <hr>
        ============================ <br>
        NAMA PEMBELI : {{$shop ['nama_orang']}} <br>
        ============================ <br>
        <?php $total = 0 ?>
        @foreach($shop['pembelian'] as $belanja)
        <li> Jenis : {{$belanja ['jenis'] }} <br></li>
        MERK    :  {{$belanja ['merk'] }} <br>
        HARGA   :  {{$belanja ['harga'] }}
    <hr>
    <?php $total += $belanja ['harga'] ?> 
    TOTAL HARGA : {{ number_format ($total,0,",",".") }} <br>

        @endforeach
        @if($total > 250000 && $total <500000)
        @php
            $cashback = (0.5/100) * $total 
        @endphp
        @elseif($total >= 500)
        @php
            $cashback = (10/100) * $total
        @endphp
        @php
            
        @endphp
            
        @endif
            CASHBACK :{{number_format ($cashback,0,",",".") }}

        @endforeach
    </fieldset>
</body>
</html>