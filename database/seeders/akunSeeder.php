<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class akunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nama' => 'ikaa',
                'alamat' => 'jl.tarumanegara',
                'telepon' => '0891012345',
                'status' => '',
                'username' => 'admin',
                'password' => bcrypt('7189admin'),
                'akses' => 'admin',
            ],
            [
                'nama' => 'mas',
                'alamat' => 'jl.tarumanegara',
                'telepon' => '0891012345',
                'status' => '',
                'username' => 'kasir',
                'password' => bcrypt('7189kasir'),
                'akses' => 'kasir',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
