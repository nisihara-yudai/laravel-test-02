<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Test02TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test02 = [
            'name' => 'test02',
            'email' => 'test02@example.com'
        ];
        DB::table('test02')->insert($test02);
        $test02 = [
            'name' => 'test02',
            'email' => 'test02@example.com'
        ];
    }
}
