<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample =[
            
            ['nama'=>'abdul','nis'=>'2022202301','jenis_kelamin'=>'L','tgl_lahir' => '2004-03-11','alamat'=>'Bandung' ],
            
            ['nama'=>'nabila','nis'=>'2022202302','jenis_kelamin'=>'P','tgl_lahir' => '2007-08-14','alamat'=>'aceh' ],
        ];
        DB::table('siswas')->insert($sample);
    }
}
