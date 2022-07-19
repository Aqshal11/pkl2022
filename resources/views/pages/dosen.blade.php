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
        <legend>Data Mahasiswa</legend>
        @foreach($dosens as $dosen)
        nama dosen : {{ $dosen ['namadosen']}} <br>
        nomor induk pokok : {{ $dosen ['nip'] }} <br>
        mahasiswa : <br>
        @foreach($dosen['mahasiswa'] as  $mahasiswa)
        nama mahasiswa :{{$mahasiswa['namamahasiswa']}} <br>
        nomor induk pokok :{{$mahasiswa['nip']}} <br>
        nama jurusan : {{$mahasiswa['jurusan']}} <br>
        mata kuliah :
        @foreach($mahasiswa ['matakuliah'] as $matkul)
        <li>{{$matkul}}</li>
            
        @endforeach
        @endforeach
        <hr> 
        @endforeach
        <br>
    </fieldset>

</body>
</html>