<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Semisal kita update data mahasiswa yang ada saat ini milik TI 2B
        DB::table('mahasiswa')->update(['kelas_id' => 2]);
    }
}
