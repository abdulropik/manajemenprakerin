<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email'=> 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('admin');

        $staff = User::create([
            'name' => 'Tata Usaha',
            'email'=> 'staff@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $staff->assignRole('staff');

        $guru = User::create([
            'name' => 'Ujank',
            'email'=> 'ujank@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $guru->assignRole('guru');

        $siswa = User::create([
            'name' => 'Ucok',
            'email'=> 'ucok@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $siswa->assignRole('siswa');
    }
}
