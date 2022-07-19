<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function hola()

    {
        $f = 10;
        $total =$f*100;
        if($total >= 1000){
            return 'Diatas Seribu';
        } else {
            return 'Dibawah seribu';
        }
    }
    public function profile()
  {
    return view('profile');
  }
  public function facebook($perkalian,$nama)
  {
    $calculator = 1+5;
    $hasilperkalian = $calculator * $perkalian;
    $jk = 10;
    return  view('pages.about',compact('nama','hasilperkalian','jk'));
  }

  public function siswa()
  {
    $a = [
      array('id'=> 1, 'name' => 'Dadang','age'=> 15 ,'hobi'=> ['basket','push rank','bernyanyi',]),
      array('id'=> 2, 'name' => 'Dudung','age'=>18,'hobi' =>['renang','basket','futsal']),
    ];
    return view('pages.siswa',['siswa'=> $a]);
  }
   public function berat($berat, $tinggi){
        $bmi = $berat / (($tinggi/100) * ($tinggi/100));
        if($bmi < 17.0){
            $status = "Kurus, kekurangan berat badan berat";
        }elseif($bmi >= 17.0 && $bmi <= 18.4){
            $status = "Kurus, kekurangan berat badan ringan";
        }elseif($bmi >= 18.5 && $bmi <= 25.0){
            $status = "Normal";
        }elseif($bmi >= 25.1 && $bmi <= 27.0){
            $status = "Gemuk, kelebihan berat badan tingkat ringan";
        }elseif($bmi >= 27.1){
            $status = "Gemuk, kelebihan berat badan tingkat berat";
        }

        return view('pages.berat', compact('berat','tinggi','status','bmi'));
    }
   public function dosen(){
        $a = [
          array('nip' => 112233, 'namadosen' => 'Ahmad Dani', 'mahasiswa' => [
            ['namamahasiswa' => 'Asep', 'nip' => 771122, 'jurusan' => 'Teknik Informatika',
            'matakuliah' => ['Biologi', 'Fisika', 'Database']],
            ['namamahasiswa' => 'Rama', 'nip' => 771233, 'jurusan' => 'Teknik Mesin',
            'matakuliah' => ['Matematika', 'B. Inggris', 'Kimia']],
            ['namamahasiswa' => 'Febri', 'nip' => 881344, 'jurusan' => 'Psikologi',
            'matakuliah' => ['Bahasa Indonesia', 'Fisika', 'Sejarah']],
            ['namamahasiswa' => 'Saeful', 'nip' => 991455, 'jurusan' => 'Hukum',
            'matakuliah' => ['Geofisika', 'Fisika', 'Database']],
            ['namamahasiswa' => 'Kevin', 'nip' => 661566, 'jurusan' => 'Teknik Listrik',
            'matakuliah' => ['Ekonomi', 'Fisika', 'Database']],
          ]),
          array('nip' => 115566, 'namadosen' => 'Dani', 'mahasiswa' => [
            ['namamahasiswa' => 'Asep', 'nip' => 551122, 'jurusan' => 'Teknik Informatika',
            'matakuliah' => ['Biologi', 'Fisika', 'Database']],
            ['namamahasiswa' => 'Rama', 'nip' => 441233, 'jurusan' => 'Teknik Mesin',
            'matakuliah' => ['Matematika', 'B. Inggris', 'Kimia']],
            ['namamahasiswa' => 'Febri', 'nip' => 331344, 'jurusan' => 'Psikologi',
            'matakuliah' => ['Bahasa Indonesia', 'Fisika', 'Sejarah']],
            ['namamahasiswa' => 'Saeful', 'nip' => 221455, 'jurusan' => 'Hukum',
            'matakuliah' => ['Geofisika', 'Fisika', 'Database']],
            ['namamahasiswa' => 'Kevin', 'nip' => 111566, 'jurusan' => 'Teknik Listrik',
            'matakuliah' => ['Ekonomi', 'Fisika', 'Database']],
          ]),
          array('nip' => 113344, 'namadosen' => 'Mahmud', 'mahasiswa' => [
            ['namamahasiswa' => 'Asep', 'nip' => 331122, 'jurusan' => 'Teknik Informatika',
            'matakuliah' => ['Biologi', 'Fisika', 'Database']],
            ['namamahasiswa' => 'Rama', 'nip' => 551233, 'jurusan' => 'Teknik Mesin',
            'matakuliah' => ['Matematika', 'B. Inggris', 'Kimia']],
            ['namamahasiswa' => 'Febri', 'nip' => 881344, 'jurusan' => 'Psikologi',
            'matakuliah' => ['Bahasa Indonesia', 'Fisika', 'Sejarah']],
            ['namamahasiswa' => 'Saeful', 'nip' => 991455, 'jurusan' => 'Hukum',
            'matakuliah' => ['Geofisika', 'Fisika', 'Database']],
            ['namamahasiswa' => 'Kevin', 'nip' => 111566, 'jurusan' => 'Teknik Listrik',
            'matakuliah' => ['Ekonomi', 'Fisika', 'Database']],
          ]),
        ];

        return view('pages.dosen', ['dosens' => $a]);
    }
    public function mahasiswa()
    {
        $a = [
            ['id' => 1, 'namad' => 'Yusuf Bachtiar', 'matkul' => 'Pemprograman Web',
                'mahasiswa' => [
                    ['nama' => 'Muhamad salah', 'nilai' => 78],
                    ['nama' => 'Juju Junaedi', 'nilai' => 85],
                    ['nama' => 'Mamt alkatiri', 'nilai' => 90],
                ],
            ]  ,
            ['id' => 2, 'namad' => 'Yaris Riyadi', 'matkul' => 'Pemprograman Mobile',
                'mahasiswa' => [
                    ['nama' => 'Angkara Messi', 'nilai' => 98],
                    ['nama' => 'Cristiano Ronaldo SUIIIIIII', 'nilai' => 100],
                ],
            ],
        ];
        return view('pages.mahasiswa',  ['dosen' => $a]);

    }
    public function kelas(){
        $a =[
            [
                'nama' => 'Agus',
                'jurusan' => 'TKR',
                'mapel'=> [
                    [
                    
                        'pelajaran' => 'B.Indonesia',
                        'nilai' => 80,
                        
                    ],
                    [
                    
                        'pelajaran' => 'B.Inggris',
                        'nilai' => 97,
                        
                    ],[
                    
                        'pelajaran' => 'Produktif',
                        'nilai' => 67,
                        
                    ],[
                    
                        'pelajaran' => 'Matematika',
                        'nilai' => 100,
                        
                   ],
                ],
            ],
            [
                'nama' => 'Mahmud',
                'jurusan' => 'TKR',
                'mapel'=> [
                    [
                    
                        'pelajaran' => 'B.Indonesia',
                        'nilai' => 78,
                        
                    ],
                    [
                    
                        'pelajaran' => 'B.Inggris',
                        'nilai' => 86,
                        
                    ],[
                    
                        'pelajaran' => 'Produktif',
                        'nilai' => 90,
                        
                    ],[
                    
                        'pelajaran' => 'Matematika',
                        'nilai' => 67,
                        
                   ],
                ],
            ],
            [
                'nama' => 'Rendi',
                'jurusan' => 'TBSM',
                'mapel'=> [
                    [
                    
                        'pelajaran' => 'B.Indonesia',
                        'nilai' => 90,
                        
                    ],
                    [
                    
                        'pelajaran' => 'B.Inggris',
                        'nilai' => 50,
                        
                    ],[
                    
                        'pelajaran' => 'Produktif',
                        'nilai' => 65,
                        
                    ],[
                    
                        'pelajaran' => 'Matematika',
                        'nilai' => 78,
                        
                   ],
                ],
            ],
            [
                'nama' => 'Firman',
                'jurusan' => 'TBSM',
                'mapel'=> [
                    [
                    
                        'pelajaran' => 'B.Indonesia',
                        'nilai' => 78,
                        
                    ],
                    [
                    
                        'pelajaran' => 'B.Inggris',
                        'nilai' => 90,
                        
                    ],[
                    
                        'pelajaran' => 'Produktif',
                        'nilai' => 56,
                        
                    ],[
                    
                        'pelajaran' => 'Matematika',
                        'nilai' => 78,
                        
                   ],
                ],
            ],
            [
                'nama' => 'Abdul',
                'jurusan' => 'TKR',
                'mapel'=> [
                    [
                    
                        'pelajaran' => 'B.Indonesia',
                        'nilai' => 89,
                        
                    ],
                    [
                    
                        'pelajaran' => 'B.Inggris',
                        'nilai' => 67,
                        
                    ],[
                    
                        'pelajaran' => 'Produktif',
                        'nilai' => 80,
                        
                    ],[
                    
                        'pelajaran' => 'Matematika',
                        'nilai' => 90,
                        
                   ],
                ],
            ],   
        ];
        return pview('kelas', ['kelas' => $a]);
    } 
     public function shop()
    {
        $shop=[ 
            ['nama_orang'=>'Alfian','pembelian'=>
            [
                ['jenis'=> 'SEPATU', 'merk'=>'VANS','harga'=>250000],
                ['jenis'=> 'BAJU', 'merk'=>'MATERNAL','harga'=>100000],
                ['jenis'=> 'CELANA', 'merk'=>'ERIGO','harga'=>150000],
                ['jenis'=> 'TOPI', 'merk'=>'VANS','harga'=>100000],
            ]
            ],
            ['nama_orang'=>'DIDA','pembelian'=>
            [
                ['jenis'=> 'TOPI', 'merk'=>'EIGER','harga'=>100000],
                ['jenis'=> 'BAJU', 'merk'=>'MATERNAL','harga'=>75000],
                ['jenis'=> 'CELANA', 'merk'=>'ERIGO','harga'=>125000]
            ]
            ],
        ];
        return view('pages.shop',['shop'=>$shop]);
    }
}

  