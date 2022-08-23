<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;


class userstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $details = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'password'
            ],

        ];

        DB::table('users')->insert($details);
    }
}