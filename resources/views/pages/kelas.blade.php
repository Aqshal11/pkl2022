<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Data Kelas
        </legend>
        @foreach($kelas as $data)
            @php
                $total = 0;
            @endphp
            Nama : {{$data[ 'nama' ]}} <br>
            Jurusan : {{$data[ 'jurusan' ]}} <br>
            Keterangan : 
            @foreach($data['mapel'] as $dta)
                <li>
                    Mata Pelajaran : {{$dta ['pelajaran']}} <br>
                   

                </li>
                <li>
                    Nilai : {{$dta ['nilai' ]}} <br> <br>
                </li>
                @php $total += $dta['nilai']@endphp
            @endforeach
            @php $rata = $total / count($data['mapel'])@endphp
            Total nilai : {{ $total }} <br>
            Rata rata nilai {{ $data['nama'] }}: {{ $rata }} <br>
           
            @php
            $grade;
            if($rata >= 85){
                $grade = 'A';
            }else if($rata >= 75){
                $grade = 'B';
            }else if($rata >=60){
                $grade = 'C';
            }else if($rata >= 50){
                $grade = 'D';
            }else{
                $grade = E;
            }
            @endphp
            Grade Nilai = {{$grade}} <hr><hr>

        @endforeach
    </fieldset>
    
</body>
</html>