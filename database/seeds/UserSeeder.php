<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Leandro Macedo',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '000.000.000-01',
            'cell' => '(00)0000-0000',
            'genre' => 'M',
            'is_admin' => 1,
        ]);
    }
}
