<?php

namespace Database\Seeders;

use App\Models\setting;
use Illuminate\Database\Seeder;

class Settingseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        setting::create([
            'name'=>'skytheme2',
            'email'=>'skytheme2@gmail.com',
            'address'=>'chittagong,Bangladesh',
            'phone'=>'01839213548',
            'logo'=>'photo',

        ]);
    }
}
